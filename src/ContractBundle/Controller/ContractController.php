<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace ContractBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use DatabaseBundle\Entity;

class ContractController extends Controller
{
    
    /**
     * Index controller which initialize basic filters and forms to find or add a contract
     * @return \Symfony\Component\HttpFoundation\Response Symfony2 Response Object with an array  
     */   
    public function indexAction()
    {     

        // Initialisation de tableaux de données pour les différents champs Select de la page d'accueil des contrats
        $viewBuilder = array();
        $operators = array();
        $countries = array();
        $oilCompanies = array();
        $helicopterClasses = array();
        $bases = array();

        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();

        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();

        // On initialise les Repositories de nos Entities
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $helicopterFleetRepository = $manager->getRepository("DatabaseBundle:HelicopterFleet");
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        
        $common = $this->container->get('core.common');
        
        $keys = array();
        $filter = array();
        
        // On exécute les requêtes via Doctrine pour récupérer nos entrées en BDD
        $allProjectStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Active', 'Expired', 'To Be Confirmed')));
        
        foreach( $allProjectStatus as $oneProjectStatus){
            $common->buildFilterByStringKey('projectStatus', $keys, $filter, $oneProjectStatus->getId());
        }
        
        // On vérifie la zone d'activité de notre utilisateur pour ne lui donner accès qu'aux données autorisées
        if (($businessArea = $user->getBusinessArea()) != null){

            if ( ($countryAreas = $countryAreaRepository->findByBusinessArea($businessArea)) != null){

                // Pour chaque pays de la zone d'activité, on récupère les projets
                foreach($countryAreas as $countryArea){
              
                    $country = $countryArea->getCountry();
                    $common->buildFilterByStringKey('country', $keys, $filter, $country->getId());
                    $countries[$country->getCountryName()] = $country;

                }

                $projects = $common->findObject($filter, $keys, $projectRepository);
                
                // Pour chaque projet, on récupère l'opérateur hélicoptère, la compagnie pétrolière et la base
                if ($projects !== null){

                    foreach ($projects as $project){

                        $operator = $project->getOperatorGroup();
                        $oilCompany = $project->getOilCompany();
                        $base = $project->getBase();
                        $helicopterFleets = $helicopterFleetRepository->findByProject($project->getId());

                        foreach ($helicopterFleets as $helicopterFleet){

                            $helicopterClass = $helicopterFleet->getHelicopterClass();

                            if ( !in_array($helicopterClass, $helicopterClasses)){
                                $helicopterClasses[$helicopterClass->getHelicopterClassName()] = $helicopterClass;
                            }

                        }

                        if ( !in_array($operator, $operators) ){
                            $operators[$operator->getOperatorGroupName()] = $operator;
                        }

                        if ( !in_array($oilCompany, $oilCompanies)){
                            $oilCompanies[$oilCompany->getOilCompanyName()] = $oilCompany;
                        }

                        if ( !in_array($base, $bases)){
                            $bases[$base->getBaseName()] = $base;
                        }
                    }
                }             
            }
           
            // On prépare les données à renvoyer à l'utilisateur
            if (!empty($countries)){
                $viewBuilder['countries'] = $countries;
            }               
            if (!empty($operators)){
                $viewBuilder['operators'] = $operators;
            }           
            if (!empty($oilCompanies)){
                $viewBuilder['oilCompanies'] = $oilCompanies;
            }  
            if (!empty($bases)){
                $viewBuilder['bases'] = $bases;
            }
            if (!empty($helicopterClasses)){
                $viewBuilder['helicopterClasses'] = $helicopterClasses;
            }
            if ($allProjectStatus != null){
                $viewBuilder['projectStatus'] = $allProjectStatus;
            }

        }

        // On retourne à l'utilisateur la page avec les données
        return $this->render('ContractBundle::contracts.html.twig', array( 'data' => $viewBuilder ));

    }

    /**
     * Search controller which search on database any contract matching with the posted form
     * @param \Symfony\Component\HttpFoundation\Request Data from the form post
     * @return string[] Array of string data related to contracts
     */
    public function searchAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $helicopterFleetRepository = $manager->getRepository("DatabaseBundle:HelicopterFleet");
        
        $allContractStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Active', 'Expired', 'To Be Confirmed')));
        
        try{
        
            if ( $common->requestFieldTest($request, 'contract_operator') ){
                $common->buildFilterByKey('operatorGroup', $keys, $filter, $request, 'contract_operator');
            }
            if ( $common->requestFieldTest($request, 'contract_oil_company') ){
                $common->buildFilterByKey('oilCompany', $keys, $filter, $request, 'contract_oil_company');
            }
            if ( $common->requestFieldTest($request, 'contract_country') ){
                $common->buildFilterByKey('country', $keys, $filter, $request, 'contract_country');
            }
            else{
                $user = $this->getUser();
                
                if ($user !== null){
                    if ( ($businessArea = $user->getBusinessArea()) !== null){
                        foreach ($businessArea->getCountryArea() as $countryArea){
                            $common->buildFilterByStringKey('country', $keys, $filter, $countryArea->getCountry()->getId());
                        }
                    }
                }
                else{
                    return new Response("You must get a business area before using this application. Please contact administrator.");
                }
            }
            if ( $common->requestFieldTest($request, 'contract_base') ){
                $common->buildFilterByKey('base', $keys, $filter, $request, 'contract_base');
            }
            if ( $common->requestFieldTest($request, 'contract_status') ){
                $common->buildFilterByKey('projectStatus', $keys, $filter, $request,'contract_status');
            }
            else{
                
                $key = 'projectStatus';
                $keys[] = $key;
                $filter[$key] = array();
                
                foreach ($allContractStatus as $contractStatus){
                    $filter[$key][] = $contractStatus->getId();
                }
            
            }
            
            if ( $common->requestFieldTest($request, 'contract_helicopter') ){
                $helicopterFleets = $helicopterFleetRepository->findBy(array( 'helicopterClass' => $request->request->get('contract_helicopter')));
                $key = 'id';
                $keys[] = $key;
                $filter[$key] = array();
                
                foreach($helicopterFleets as $helicopterFleet){
                    $filter[$key][] = $helicopterFleet->getProject()->getId();
                }
                
            }
            
            try{
                $result = $common->findObject($filter, $keys, $projectRepository, 1);
                $myProjects = $common->objectDataBuilder($result, $projectRepository);
            } catch (Exception $ex) {
                echo "Exception thrown : " + $ex->getMessage();
            }
            
            if(!empty($myProjects) && $myProjects != null){
                
                foreach($myProjects as $project){
                    try{
                        $base = $projectRepository->find($project['id'])->getBase();
                        $myProjects[$project['id']]['base'] = $baseRepository->singleObjectBuilder($base);
                    } 
                    catch (Exception $ex) {
                        echo "Exception thrown : " + $ex->getMessage();
                    }
                    
                    $operationalMode = -1;
                    
                    foreach ( $projectCircuitRepository->findByProject($project) as $projectCircuit ) {
                        
                        if ($operationalMode != $projectCircuit->getOperationalMode()->getId()){
                            $operationalMode = $projectCircuit->getOperationalMode()->getId();
                        }
                        
                        $platform = $projectCircuit->getPlatform();           
                        $myProjects[$project['id']]['mission'][$operationalMode][$platform->getId()] = $platformRepository->singleObjectBuilder($platform);
                        $myProjects[$project['id']]['mission'][$operationalMode][$platform->getId()]['orderNumber'] = $projectCircuit->getOrderNumber();
                        
                        if ( ($alternateEnding = $projectCircuit->getOperationalMode()->getAlternate() ) != null ){
                            $gps = array();
                            $gps['lat'] = $alternateEnding->getLatitude();
                            $gps['lng'] = $alternateEnding->getLongitude();
                            $myProjects[$project['id']]['mission'][$operationalMode]['ending'] = array(    'gps' => $gps,
                                                                                                           'name' => $alternateEnding->getAlternateName());
                        }
                        else{
                            $myProjects[$project['id']]['mission'][$operationalMode]['ending'] = $myProjects[$project['id']]['base'];
                        }
                        
                    }
                }
            }
        
        }
        catch(Exception $e){
            echo "Exception thrown : " + $e->getMessage();
        }
            
        if (!empty($myProjects))
            return new Response(json_encode($myProjects));
        else{
            $myProjects = array('empty' => 1);
            return new Response(json_encode($myProjects));
        }

    }

    
    /**
     * Initialize the form to add a contract by providing all required informations about contract
     * @return string[] Array of string data related to contracts
     */
    public function initializeAddFormAction($id = null){

        // Initialisation de tableaux de données pour les différents champs Select de la page d'accueil des contrats
        $viewBuilder = array();
        $operators = array();
        $countries = array();
        $oilCompanies = array();
        $arrayProjectStatus = array();
        $bases = array();
        $helicopterManufacturers = array();
        $helicopterCategories = array();
        $myProject = null;

        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();

        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();

        // On initialise les différents Repository
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");       
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        $helicopterManufacturerRepository = $manager->getRepository("DatabaseBundle:Constructor");
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");

        // On exécute les requêtes via Doctrine
        $operatorGroups = $operatorGroupRepository->findAll();
        $oilCompaniesRequest = $oilCompanyRepository->findAll();
        $allProjectStatus = $projectStatusRepository->findBy(array('projectStatusName' => array('Active', 'Expired', 'To Be Confirmed')));
        $allHelicopterManufacturer = $helicopterManufacturerRepository->findAll();
        $allHelicopterCategories = $manager->getRepository("DatabaseBundle:HelicopterCategory")->findAll();
        
        if ($id !== null){
            $project = $projectRepository->find($id);
            $myProject = $projectRepository->singleObjectBuilder($project);
        }

        foreach($operatorGroups as $operator){
            $operators[$operator->getId()]['id'] = $operator->getId();
            $operators[$operator->getId()]['name'] = $operator->getOperatorGroupName();
        }

        foreach($oilCompaniesRequest as $oilCompany){
            $oilCompanies[$oilCompany->getId()]['id'] = $oilCompany->getId();
            $oilCompanies[$oilCompany->getId()]['name'] = $oilCompany->getOilCompanyName();
        }  

        foreach($allProjectStatus as $projectStatus){
            $arrayProjectStatus[$projectStatus->getId()]['id'] = $projectStatus->getId();
            $arrayProjectStatus[$projectStatus->getId()]['name'] = $projectStatus->getProjectStatusName();
        }
        
        foreach($allHelicopterManufacturer as $helicopterManufacturer){
            $helicopterManufacturers[$helicopterManufacturer->getId()]['id'] = $helicopterManufacturer->getId();
            $helicopterManufacturers[$helicopterManufacturer->getId()]['name'] = $helicopterManufacturer->getConstructorName();
        }
        
        foreach($allHelicopterCategories as $helicopterCategory){
            $helicopterCategories[$helicopterCategory->getId()]['id'] = $helicopterCategory->getId();
            $helicopterCategories[$helicopterCategory->getId()]['name'] = $helicopterCategory->getHelicopterCategoryName();
        }
        
        if (($businessArea = $user->getBusinessArea()) != null){
            
            if ( ($countryAreas = $countryAreaRepository->findByBusinessArea($businessArea)) != null){
                
                foreach($countryAreas as $countryArea){
                    
                    $country = $countryArea->getCountry();
                    
                    if(!in_array($country, $countries)){

                        $countries[$country->getId()]['id'] = $country->getId();
                        $countries[$country->getId()]['name'] = $country->getCountryName();

                    }

                }
            }

        }

        if(!empty($operators)){
            $viewBuilder['operators'] = $operators;
        }
        if(!empty($oilCompanies)){
            $viewBuilder['oilCompanies'] = $oilCompanies;
        }
        if(!empty($bases)){
            $viewBuilder['bases'] = $bases;
        }
        if(!empty($arrayProjectStatus)){
            $viewBuilder['projectStatus'] = $arrayProjectStatus;
        }
        if(!empty($countries)){
            $viewBuilder['countries'] = $countries;
        }
        if(!empty($helicopterManufacturers)){
            $viewBuilder['manufacturers'] = $helicopterManufacturers;
        }
        if ($helicopterCategories != null){
            $viewBuilder['helicopterCategories'] = $helicopterCategories;
        }
        if ($myProject != null && !(empty($myProject))){
            $viewBuilder['project'] = $myProject;
        }

        $viewBuilder = json_encode($viewBuilder);

        return new Response($viewBuilder);  

    }
    
    /**
     * Add controller which check validity of the form and then add the contract into database
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addContractAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        
        $project = new Entity\Project();
        $project->setRealContract(true);
        
        $projectName = "";
        
        $operatorRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        $helicopterRepository = $manager->getRepository("DatabaseBundle:HelicopterClass");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        
        if ( $common->requestFieldTest($request, 'add_contract_operator') ){
            $operator = $operatorRepository->findById($request->request->get('add_contract_operator'));
            $project->setOperatorGroup($operator[0]);
            $projectName .= $operator[0]->getOperatorGroupName();
        }
        else{
            $operator = $operatorRepository->findBy(array("operatorGroupName" => "Unknown"));
            if ($operator == null){
                throw new \ErrorException('Error : you should create an operator group called "Unknown". Please contact administrator.');
            }
            else{
                $project->setOperatorGroup($operator[0]);
                $projectName .= $operator[0]->getOperatorGroupName();
            }
        }
        if ( $common->requestFieldTest($request, 'add_contract_oil_company') ){
            $oilCompany = $oilCompanyRepository->findById($request->request->get('add_contract_oil_company'));
            $project->setOilCompany($oilCompany[0]);
            $projectName .= " - " . $oilCompany[0]->getOilCompanyName();
        }
        else{
            $oilCompany = $oilCompanyRepository->findBy(array("oilCompanyName" => "Unknown"));
            if ($oilCompany == null){
                throw new \ErrorException('Error : you should create an oil company called "Unknown". Please contact administrator.');
            }
            else{
                $project->setOilCompany($oilCompany[0]);
                $projectName .= " - " . $oilCompany[0]->getOilCompanyName();
            }
        }
        if ( $common->requestFieldTest($request, 'add_contract_country') ){
            if ($request->request->get('add_contract_country')[0] !== ''){
                $country = $countryRepository->findById($request->request->get('add_contract_country'));
                $project->setCountry($country[0]);
            }
            else{
                return new Response("Error : you must select a country.");
            }
        }
        else{
            return new Response("Error : you must select a country.");
        }
        if ( $common->requestFieldTest($request, 'add_contract_base') ){
            $base = $baseRepository->findById($request->request->get('add_contract_base'));
            $project->setBase($base[0]);
            $projectName .= " - " . $base[0]->getBaseName();
            $project->setProjectName($projectName);
        }
        else{
            $base = $baseRepository->findBy(array("baseName" => "Unknown"));
            if ($base == null){
                throw new \ErrorException('Error : you should create a base called "Unknown". Please contact administrator.');
            }
            else{
                $project->setBase($base[0]);
                $projectName .= " - " . $base[0]->getBaseName();
                $project->setProjectName($projectName);
            }
        }
        if ( $common->requestFieldTest($request, 'add_contract_contract_status') ){
            $projectStatus = $projectStatusRepository->findById($request->request->get('add_contract_contract_status'));
            $project->setProjectStatus($projectStatus[0]);
        }
        else{
            return new Response("Error : you must select a contract status.");
        }
        if ( $common->requestFieldTest($request, 'add_contract_start_date') ){
            $startDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('add_contract_start_date'));
            $project->setContractStartDate($startDate);
        }
        if ( $common->requestFieldTest($request, 'add_contract_end_date') ){
            $endDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('add_contract_end_date'));
            $project->setContractEndYear($endDate);
            $endQuarter = $endDate->format('m');
            $project->setContractEndQuarter($endQuarter);
        }
        if ( $common->requestFieldTest($request, 'add_contract_summary') ){
            $project->setSummary($request->request->get('add_contract_summary'));
        }
        else{
            return new Response("Error : you must enter a 2-lines summary for the contract.");
        }
        if ( $common->requestFieldTest($request, 'add_contract_options') ){
            $project->setOptions($request->request->get('add_contract_options'));
        }
        if ( $common->requestFieldTest($request, 'add_contract_comment') ){
            $project->setOptions($request->request->get('add_contract_comment'));
        }
        if ( $common->requestFieldTest($request, 'add_contract_confidential_link')){
            $project->setConfidentialLink($request->request->get('add_contract_confidential_link'));
        }
        if ( $common->requestFieldTest($request, 'add_contract_external_link')){
            $project->setExternalLink($request->request->get('add_contract_external_link'));
        }
        
        if ( $common->requestFieldTest($request, 'add_contract_mission_order') ){                  
            
            $mission = str_getcsv($request->request->get('add_contract_mission_order'), ','); 
            $operationalMode = new \DatabaseBundle\Entity\OperationalMode();
            
            $manager->persist($operationalMode);
            
            for($i=0; $i < count($mission); $i++){
                
                $myProjectCircuit = new \DatabaseBundle\Entity\ProjectCircuit();
                $myProjectCircuit->setOperationalMode($operationalMode);
                $myProjectCircuit->setProject($project);
                $myProjectCircuit->setOrderNumber($i);
                
                $platform = $platformRepository->findById($mission[$i]);
                $myProjectCircuit->setPlatform($platform[0]);     
                
                $manager->persist($myProjectCircuit);
                
            }
        } 
        else{
            if ( $common->requestFieldTest($request, 'add_contract_platforms')){
                
                $common->buildFilterByKey('id', $keys, $filter, $request, 'add_contract_platforms');     
                $platforms = $common->findObject($filter, $keys, $platformRepository);
                $operationalMode = new \DatabaseBundle\Entity\OperationalMode();
                $manager->persist($operationalMode);
                
                foreach($platforms as $platform){
                    $myProjectCircuit = new \DatabaseBundle\Entity\ProjectCircuit();
                    $myProjectCircuit->setOperationalMode($operationalMode);
                    $myProjectCircuit->setProject($project);
                    $myProjectCircuit->setPlatform($platform);
                    $manager->persist($myProjectCircuit);
                }
            }
            if ( $common->requestFieldTest($request, 'edit_contract_remove_mission')){
                $projectCircuits = $project->getCircuit();

                foreach ($projectCircuits as $projectCircuit){

                    $operationalMode = $projectCircuit->getOperationalMode();
                    $project->removeCircuit($projectCircuit);                          
                    $operationalMode->removeCircuit($projectCircuit);

                    foreach($allProjectCircuits = $projectCircuitRepository->find($projectCircuit) as $occur){

                        $platform = $occur->getPlatform();
                        $platform->removeCircuit($occur);
                    }

                    $manager->remove($projectCircuit);
                }
            }
        }
        
        if ( $common->requestFieldTest($request, 'add_contract_helicopter_type') ){
            
            $common->buildFilterByKey('id', $keys, $filter, $request, 'add_contract_helicopter_type');
            $helicopters = $common->findObject($filter, $keys, $helicopterRepository);
            
            foreach($helicopters as $helicopter){
                
                
                $myHelicopterFleet = new Entity\HelicopterFleet();
                
                $myHelicopterFleet->setProject($project);
                $myHelicopterFleet->setHelicopterClass($helicopter);
                $myHelicopterFleet->setQuantity($request->request->get($helicopter->getHelicopterClassName()));
                
                $manager->persist($myHelicopterFleet);
                
            }
            
            $filter = array();
            $keys = array();
        }
        
        $manager->persist($project);
        
        try{
            $manager->flush();
            return new Response("Project successfully saved !");
        } catch (Exception $ex) {
            echo "Exception thrown : " + $ex;
        } 
        
    }
    
    /**
     * Helicopter search controller which grab from database all helicopter types in function of form posted
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function findHelicopterFilteredAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $common = $this->container->get('core.common');
        
        $helicopterTypeRepository = $this->getDoctrine()->getManager()->getRepository("DatabaseBundle:HelicopterClass");
        
        if ($common->requestFieldTest($request, 'constructors')){
            $common->buildFilterByKey('constructor', $keys, $filter, $request, 'constructors');
        }
        if ($common->requestFieldTest($request, 'categories')){
            $common->buildFilterByKey('helicopterCategory', $keys, $filter, $request, 'categories');
        }
        
        $result = $common->findObject($filter, $keys, $helicopterTypeRepository);
        $myHelicoptersType = $common->objectDataBuilder($result, $helicopterTypeRepository);
        
        return new Response(json_encode($myHelicoptersType));
        
    }
    
    /**
     * Controller which check data to expose on client side about contract details
     * @param Integer $id Unique ID of the contract user is looking for details
     * @return \Symfony\Component\HttpFoundation\Response Sample Symfony2 Response Object with an array of data
     */
    public function showContractDetailAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $helicopterFleetRepository = $manager->getRepository("DatabaseBundle:HelicopterFleet");
        $projectCommentRepository = $manager->getRepository("DatabaseBundle:ProjectComment");
        
        $project = $projectRepository->findById($id);
        
        if($project != null){
            $helicopterFleet = $helicopterFleetRepository->findByProject($project);
            $projectComments = $projectCommentRepository->findByProject($project);
            $myProject = $projectRepository->singleObjectBuilder($project[0]);
        }
        else{
            return new Response("Variable \$id doesn't contain an existing contract id !");
        }
        
        
        try{
            
            if(!empty($project) && $project != null){
                
                try{
                    $base = $project[0]->getBase();
                    $myProject['base'] = $baseRepository->singleObjectBuilder($base);
                } 
                catch (Exception $ex) {
                    echo "Exception thrown : " + $ex->getMessage();
                }

                foreach ( $projectCircuitRepository->findByProject($project[0]) as $projectCircuit ) {
                    
                    $platform = $projectCircuit->getPlatform();           
                    $myProject['mission'][$platform->getId()] = $platformRepository->singleObjectBuilder($platform);
                    
                }
                
                $i = 0;
                foreach ( $helicopterFleet as $helicopter ){
                    $myProject['helicopters'][$i]['name'] = $helicopter->getHelicopterClass()->getHelicopterClassName();
                    $myProject['helicopters'][$i]['quantity'] = $helicopter->getQuantity();
                    $i++;
                }
                
                $i=0;
                foreach ($projectComments as $comment){
                    $myProject['userComments'][$i]['user'] = $comment->getUser()->getFirstName() . ' ' . $comment->getUser()->getLastName();
                    $myProject['userComments'][$i]['content'] = $comment->getContent();
                    $date = $comment->getDate()->format('d/m/Y H:i');
                    $myProject['userComments'][$i]['date'] = $date;
                    $i++;
                }
            }
        }
        catch(Exception $e){
            echo "Exception thrown : " + $e->getMessage();
        }
        return $this->render('ContractBundle::contractDetail.html.twig', array('data' => $myProject));    

    }
    
    /**
     * Function which initialize data to display on the map client-side
     * @param Integer $id Unique ID of the contract user is looking for mapping
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function initializeMapAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        $project = $manager->getRepository("DatabaseBundle:Project")->findById($id)[0];
        $myProject = array();

        try{
            $base = $project->getBase();
            $myProject['base'] = $manager->getRepository("DatabaseBundle:Base")->singleObjectBuilder($base);
        } 
        catch (Exception $ex) {
            echo "Exception thrown : " + $ex->getMessage();
        }

        $operationalMode = -1;

        foreach ( $manager->getRepository("DatabaseBundle:ProjectCircuit")->findByProject($project) as $projectCircuit ) {

            if ($operationalMode != $projectCircuit->getOperationalMode()->getId()){
                $operationalMode = $projectCircuit->getOperationalMode()->getId();
            }

            $platform = $projectCircuit->getPlatform();           
            $myProject['mission'][$operationalMode][$platform->getId()] = $manager->getRepository("DatabaseBundle:Platform")->singleObjectBuilder($platform);
            $myProject['mission'][$operationalMode][$platform->getId()]['orderNumber'] = $projectCircuit->getOrderNumber();

            if ( ($alternateEnding = $projectCircuit->getOperationalMode()->getAlternate() ) != null ){
                $gps = array();
                $gps['lat'] = $alternateEnding->getLatitude();
                $gps['lng'] = $alternateEnding->getLongitude();
                $myProject['mission'][$operationalMode]['ending'] = array(  'gps' => $gps,
                                                                            'name' => $alternateEnding->getAlternateName());
            }

        }
        
        return new Response(json_encode($myProject));
        
    }
    
    /**
     * Function which allow users to add a comment on a contract
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $id Unique ID of the contract user is looking for adding a comment
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addCommentAction(Request $request, $id){
        
        $manager = $this->getDoctrine()->getManager();
        $common = $this->container->get('core.common');
        
        $response = array();
        
        try{
            if ($common->requestFieldTest($request, 'add_comment_comment')){
                $project = $manager->getRepository("DatabaseBundle:Project")->findById($id);
                $user = $this->getUser();
                
                $projectComment = new \DatabaseBundle\Entity\ProjectComment();
                
                $projectComment->setContent($request->request->get('add_comment_comment'));
                $projectComment->setDate(new \DateTime());
                $projectComment->setProject($project[0]);
                $projectComment->setUser($user);
                
                $response['user'] = $user->getFirstName() . " " . $user->getLastName();
                $response['date'] = $projectComment->getDate()->format('d/m/Y H:i');
                $response['content'] = $projectComment->getContent();
                $response['message'] = "Comment successfully saved !";
                
                $manager->persist($projectComment);
                $manager->flush();
                
            }
            else{
                return new Response("You attempted to insert empty comment ! Please fill the comment box before sending it again.");
            }
        } 
        catch (Exception $ex) {
            echo "Exception thrown : " + $ex->getMessage();
        }
        
        return new Response(json_encode($response));
        
    }
    
    /**
     * Function which check form validity, persist (or not) changes on the contract and return a error/success message
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param Integer $id Id of the project user wishes to edit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editContractAction(Request $request, $id){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        
        $projectName = "";
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
        $operatorRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        $helicopterRepository = $manager->getRepository("DatabaseBundle:HelicopterClass");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        
        try{
            if($id != null){
                
                $project = $projectRepository->findById($id);
                $project = $project[0];
                
                if( $project != null){
                    if ( $common->requestFieldTest($request, 'edit_contract_operator') ){
                        $operator = $operatorRepository->findById($request->request->get('edit_contract_operator'));
                        $project->setOperatorGroup($operator[0]);
                    }
                    $projectName .= $project->getOperatorGroup()->getOperatorGroupName();
                    if ( $common->requestFieldTest($request, 'edit_contract_oil_company') ){
                        $oilCompany = $oilCompanyRepository->findById($request->request->get('edit_contract_oil_company'));
                        $project->setOilCompany($oilCompany[0]);
                    }
                    $projectName .= " - " . $project->getOilCompany()->getoilCompanyName();
                    if ( $common->requestFieldTest($request, 'edit_contract_base') ){
                        $base = $baseRepository->findById($request->request->get('edit_contract_base'));
                        $project->setBase($base[0]);
                        $project->setProjectName($projectName);
                    }
                    $projectName .= " - " . $project->getBase()->getBaseName();
                    if ( $common->requestFieldTest($request, 'edit_contract_country') ){
                        if ($request->request->get('edit_contract_country')[0] !== ''){
                            $country = $countryRepository->findById($request->request->get('edit_contract_country'));
                            $project->setCountry($country[0]);
                        }
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_contract_status') ){
                        $projectStatus = $projectStatusRepository->findById($request->request->get('edit_contract_contract_status'));
                        $project->setProjectStatus($projectStatus[0]);
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_start_date') ){
                        $startDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_contract_start_date'));
                        $project->setContractStartDate($startDate);
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_end_date') ){
                        $endDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_contract_end_date'));
                        $project->setContractEndYear($endDate);
                        $endQuarter = $endDate->format('m');
                        $project->setContractEndQuarter($endQuarter);
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_summary') ){
                        $project->setSummary($request->request->get('edit_contract_summary'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_options') ){
                        $project->setOptions($request->request->get('edit_contract_options'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_comment')){
                        $project->setOptionsComment($request->request->get('edit_contract_comment'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_confidential_link')){
                        $project->setConfidentialLink($request->request->get('edit_contract_confidential_link'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_external_link')){
                        $project->setExternalLink($request->request->get('edit_contract_external_link'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_mission_order') ){                  
            
                        $mission = str_getcsv($request->request->get('edit_contract_mission_order'), ',');
                        
                        $projectCircuits = $project->getCircuit();
                        
                        foreach ($projectCircuits as $projectCircuit){
                            
                            $operationalMode = $projectCircuit->getOperationalMode();
                            $project->removeCircuit($projectCircuit);                          
                            $operationalMode->removeCircuit($projectCircuit);
                            
                            foreach($allProjectCircuits = $projectCircuitRepository->find($projectCircuit) as $occur){
                                
                                $platform = $occur->getPlatform();
                                $platform->removeCircuit($occur);
                            }
                            
                            $manager->remove($projectCircuit);
                        }
                        
                        $operationalMode = new \DatabaseBundle\Entity\OperationalMode();
                        $manager->persist($operationalMode);

                        for($i=0; $i < count($mission); $i++){

                            $myProjectCircuit = new \DatabaseBundle\Entity\ProjectCircuit();
                            $myProjectCircuit->setOperationalMode($operationalMode);
                            $myProjectCircuit->setProject($project);
                            $myProjectCircuit->setOrderNumber($i);

                            $platform = $platformRepository->findById($mission[$i]);
                            $myProjectCircuit->setPlatform($platform[0]);     

                            $manager->persist($myProjectCircuit);

                        }
                    }
                    else{
                        if ( $common->requestFieldTest($request, 'edit_contract_remove_mission')){
                            $projectCircuits = $project->getCircuit();
                            
                            foreach ($projectCircuits as $projectCircuit){
                            
                                $operationalMode = $projectCircuit->getOperationalMode();
                                $project->removeCircuit($projectCircuit);                          
                                $operationalMode->removeCircuit($projectCircuit);

                                foreach($allProjectCircuits = $projectCircuitRepository->find($projectCircuit) as $occur){

                                    $platform = $occur->getPlatform();
                                    $platform->removeCircuit($occur);
                                }

                                $manager->remove($projectCircuit);
                            }
                        }
                        if ( $common->requestFieldTest($request, 'edit_contract_platforms')){
                
                            $common->buildFilterByKey('id', $keys, $filter, $request, 'edit_contract_platforms');     
                            $platforms = $common->findObject($filter, $keys, $platformRepository);
                            $operationalMode = new \DatabaseBundle\Entity\OperationalMode();
                            $manager->persist($operationalMode);

                            foreach($platforms as $platform){
                                $myProjectCircuit = new \DatabaseBundle\Entity\ProjectCircuit();
                                $myProjectCircuit->setOperationalMode($operationalMode);
                                $myProjectCircuit->setProject($project);
                                $myProjectCircuit->setPlatform($platform);
                                $manager->persist($myProjectCircuit);
                            }

                        }
                    }
                    if ( $common->requestFieldTest($request, 'edit_contract_helicopter_type') ){
                        
                        
                        $helicopterFleets = $project->getHelicopterFleet();
                        
                        foreach($helicopterFleets as $helicopterFleet){
                            
                            $helicopterClass = $helicopterFleet->getHelicopterClass();
                            
                            $project->removeHelicopterFleet($helicopterFleet);
                            $helicopterClass->removeHelicopterFleet($helicopterFleet);
                            
                            $manager->remove($helicopterFleet);
                        }
                        
                        $common->buildFilterByKey('id', $keys, $filter, $request, 'edit_contract_helicopter_type');
                        $helicopters = $common->findObject($filter, $keys, $helicopterRepository);

                        foreach($helicopters as $helicopter){

                            $myHelicopterFleet = new Entity\HelicopterFleet();

                            $myHelicopterFleet->setProject($project);
                            $myHelicopterFleet->setHelicopterClass($helicopter);
                            $myHelicopterFleet->setQuantity($request->request->get($helicopter->getHelicopterClassName()));

                            $manager->persist($myHelicopterFleet);

                        }

                        $filter = array();
                        $keys = array();
                    }
                    
                    $project->setProjectName($projectName);
                    
                    $manager->persist($project);
        
                    try{
                        $manager->flush();
                        return new Response("Changes successfully saved !");
                    } 
                    catch (Exception $ex) {
                        echo "Exception thrown : " + $ex;
                    } 
                    
                }
                else{
                    return new Response("Error : this contract id does not exist !");
                }
            }
            else{
                return new Response("Error : given contract id is null !");
            }
        } 
        catch (Exception $ex) {
            echo "Exception thrown : " + $ex->getMessage();
        }   
    }
    
    /**
     * Function which check if a project with such id exists and process to project archiving
     * @param Integer $id Id of the project user wishes to archive
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function archiveAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        
        $project = $projectRepository->find($id);
        $projectStatus = $projectStatusRepository->findByProjectStatusName("Archived");
        
        if ($project !== null){
            
            if ($projectStatus !== null){
                $projectStatus = $projectStatus[0];
                $project->setProjectStatus($projectStatus);
                $manager->persist($project);
                
            }
            else{
                return new Response("Error : there is no project status matching with \"Archived\". Please contact administrator of the application.");
            }
            
        }
        else{
            return new Response("Error : there is no project in database with such id. Maybe someone has already removed this project ?");
        }
        
        $manager->flush();
        
        return new Response("Project successfully archived !");
    }
    
    /**
     * Function which check if a project with such id exists and process to project deleting
     * @param Integer $id Id of the project user wishes to archive
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        
        $project = $projectRepository->find($id);
        
        if ($project !== null){

            $circuits = $project->getCircuit();
            $missionAreas = $project->getMissionAreas();
            $projectComments = $project->getProjectComments();
            $helicopterFleets = $project->getHelicopterFleet();
            $aircraftFleets = $project->getAircraftFleet();
            
            foreach ($circuits as $circuit){
                $project->removeCircuit($circuit);
                $manager->remove($circuit);
            }
            foreach ($missionAreas as $missionArea){
                $project->removeMissionArea($missionArea);
                $manager->remove($missionArea);
            }
            foreach ($projectComments as $projectComment){
                $project->removeProjectComment($projectComment);
                $manager->remove($projectComment);
            }
            foreach ($helicopterFleets as $helicopterFleet){
                $project->removeHelicopterFleet($helicopterFleet);
                $manager->remove($helicopterFleet);
            }
            foreach ($aircraftFleets as $aircraftFleet){
                $project->removeAircraftFleet($aircraftFleet);
                $manager->remove($aircraftFleet);
            }
            
            $manager->remove($project);
            
            $manager->flush();
            
        }
        else{
            return new Response("Error : there is no project in database with such id. Maybe someone has already removed this project ?");
        }
        
        $manager->flush();
        
        return new Response("Project successfully deleted !");
    }
    
    public function searchPlatformsAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $keys = array();
        $filter = array();
        
        $common = $this->container->get('core.common');
        
        $platformRepository = $this->getDoctrine()->getManager()->getRepository("DatabaseBundle:Platform");
        
        if ($common->requestFieldTest($request, 'add_project_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'add_project_country');
        }
        else if ($common->requestFieldTest($request, 'add_tender_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'add_tender_country');
        }
        else if ($common->requestFieldTest($request, 'add_contract_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'add_contract_country');
        }
        else if ($common->requestFieldTest($request, 'edit_contract_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'edit_contract_country');
        }
        else if ($common->requestFieldTest($request, 'edit_tender_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'edit_tender_country');
        }
        else if ($common->requestFieldTest($request, 'edit_project_country')){
            $common->buildFilterByKey('country', $keys, $filter, $request, 'edit_project_country');
        }
        else{
            return new Response();
        }
        
        $result = $common->findObject($filter, $keys, $platformRepository);
        $myPlatforms = $common->objectDataBuilder($result, $platformRepository);
        
        usort($myPlatforms, function($a, $b){
            return strcmp($a["name"], $b["name"]);
        });
        
        return new Response(json_encode($myPlatforms));
    }
}