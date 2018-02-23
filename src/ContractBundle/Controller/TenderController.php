<?php

namespace ContractBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DatabaseBundle\Entity;

class TenderController extends Controller
{
    
    /**
     * Index controller which will initialize basic forms related to tenders
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){
        
        // Initialisation de tableaux de données pour les différents champs Select de la page d'accueil des contrats
        $viewBuilder = array();
        $operators = array();
        $countries = array();
        $oilCompanies = array();
        $helicopterCategories = array();
        $bases = array();

        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();

        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();

        // On initialise les Repositories de nos Entities
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $aircraftFleetRepository = $manager->getRepository("DatabaseBundle:AircraftFleet");
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        
        $common = $this->container->get('core.common');
        $filter = array();
        $keys = array();
        
        // On exécute les requêtes via Doctrine pour récupérer nos entrées en BDD
        $allProjectStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Under Discussion', 'Issued', 'Closed', 'Awarded')));
        
        foreach ( $allProjectStatus as $oneProjectStatus ){
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
                if ($projects != null){

                    foreach ($projects as $project){

                        $operator = $project->getOperatorGroup();
                        $oilCompany = $project->getOilCompany();
                        $base = $project->getBase();
                        $aircraftFleets = $aircraftFleetRepository->findByProject($project->getId());

                        foreach ($aircraftFleets as $aircraftFleet){

                            $helicopterCategory = $aircraftFleet->getHelicopterCategory();

                            if ( !in_array($helicopterCategory, $helicopterCategories)){
                                $helicopterCategories[$helicopterCategory->getHelicopterCategoryName()] = $helicopterCategory;
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
            if (!empty($helicopterCategories)){
                $viewBuilder['helicopterCategories'] = $helicopterCategories;
            }
            if ($allProjectStatus != null){
                $viewBuilder['projectStatus'] = $allProjectStatus;
            }
        }
        return $this->render('ContractBundle::tenders.html.twig', array( 'data' => $viewBuilder ));
    }
    
    /**
     * Initialize  data for the add tender form
     * @param Integer $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function initializeAddFormAction($id = null){

        // Initialisation de tableaux de données pour les différents champs Select de la page d'accueil des contrats
        $viewBuilder = array();
        $operators = array();
        $countries = array();
        $oilCompanies = array();
        $bases = array();
        $platforms = array();
        $helicopterCategories = array();
        $myProject = null;

        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();

        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();

        // On initialise les différents Repository
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");       
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $helicopterCategoryRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");

        // On exécute les requêtes via Doctrine
        $operatorGroups = $operatorGroupRepository->findAll();
        $oilCompaniesRequest = $oilCompanyRepository->findAll();
        $allHelicopterCategories = $helicopterCategoryRepository->findAll();
        $allTenderStatus = $projectStatusRepository->findBy(array('projectStatusName' => array('Under Discussion', 'Issued', 'Closed', 'Awarded')));
        
        if ($id !== null){
            $project = $projectRepository->find($id);
            $myProject = $projectRepository->singleObjectBuilder($project);
        }
        
        foreach($allTenderStatus as $tenderStatus){
            $arrayProjectStatus[$tenderStatus->getId()]= $projectStatusRepository->singleObjectBuilder($tenderStatus);
        }

        foreach($operatorGroups as $operator){
            $operators[$operator->getId()] = $operatorGroupRepository->singleObjectBuilder($operator);
        }
        foreach($oilCompaniesRequest as $oilCompany){
            $oilCompanies[$oilCompany->getId()] = $oilCompanyRepository->singleObjectBuilder($oilCompany);
        }              
        foreach($allHelicopterCategories as $helicopterCategory){
            $helicopterCategories[$helicopterCategory->getId()] = $helicopterCategoryRepository->singleObjectBuilder($helicopterCategory);
        }       
        if (($businessArea = $user->getBusinessArea()) != null){
            
            if ( ($countryAreas = $countryAreaRepository->findByBusinessArea($businessArea)) != null){
                
                foreach($countryAreas as $countryArea){
                    
                    $country = $countryArea->getCountry();
                    
                    if(!in_array($country, $countries)){

                        $countries[$country->getId()] = $countryRepository->singleObjectBuilder($country);

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
        if(!empty($countries)){
            $viewBuilder['countries'] = $countries;
        }
        if(!empty($platforms)){
            $viewBuilder['platforms'] = $platforms;
        }
        if ($helicopterCategories != null){
            $viewBuilder['helicopterCategories'] = $helicopterCategories;
        }     
        if ($arrayProjectStatus != null){
            $viewBuilder['projectStatus'] = $arrayProjectStatus;
        }
        if ($myProject != null && !(empty($myProject))){
            $viewBuilder['project'] = $myProject;
        }

        $viewBuilder = json_encode($viewBuilder);

        return new Response($viewBuilder);  

    }
    
    /**
     * Function which return an array of result depending on filter parameters
     * @param \Symfony\Component\HttpFoundation\Request $request The request contains the form to filter tenders
     * @return \Symfony\Component\HttpFoundation\Response
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
        $aircraftFleetRepository = $manager->getRepository("DatabaseBundle:AircraftFleet");
        
        $allContractStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Under Discussion', 'Issued', 'Closed', 'Awarded')));
        
        try{
            
            if ( $common->requestFieldTest($request, 'tender_operator') ){
                $common->buildFilterByKey('operatorGroup', $keys, $filter, $request, 'tender_operator');
            }
            if ( $common->requestFieldTest($request, 'tender_oil_company') ){
                $common->buildFilterByKey('oilCompany', $keys, $filter, $request, 'tender_oil_company');
            }
            if ( $common->requestFieldTest($request, 'tender_country') ){
                $common->buildFilterByKey('country', $keys, $filter, $request, 'tender_country');
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
            if ( $common->requestFieldTest($request, 'tender_base') ){
                $common->buildFilterByKey('base', $keys, $filter, $request, 'tender_base');
            }
            if ( $common->requestFieldTest($request, 'tender_status') ){
                $common->buildFilterByKey('projectStatus', $keys, $filter, $request,'tender_status');
            }
            else{
                
                $key = 'projectStatus';
                $keys[] = $key;
                $filter[$key] = array();
                
                foreach ($allContractStatus as $contractStatus){
                    $filter[$key][] = $contractStatus->getId();
                }
            
            }
            if ( $common->requestFieldTest($request, 'tender_level') ){
                $common->buildFilterByKey('projectLevel', $keys, $filter, $request,'tender_level');
            }
            
            if ( $common->requestFieldTest($request, 'tender_category') ){
                $aircraftFleets = $aircraftFleetRepository->findBy(array( 'helicopterCategory' => $request->request->get('tender_category')));
                $key = 'id';
                $keys[] = $key;
                $filter[$key] = array();
                
                foreach($aircraftFleets as $aircraftFleet){
                    $filter[$key][] = $aircraftFleet->getProject()->getId();
                }
                
            }
            
            try{
                $result = $common->findObject($filter, $keys, $projectRepository, 1);
                $myProjects = $common->objectDataBuilder($result, $projectRepository);
            } 
            catch (Exception $ex) {
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
     * Function which check data transmitted by the user and insert into database new tender
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \ErrorException
     */
    public function addTenderAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        
        $project = new Entity\Project();
        $project->setRealContract(true);
        
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        $helicopterRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        
        $operatorGroup = $operatorGroupRepository->findByOperatorGroupName('Unknown');
        
        if( $operatorGroup != null){
            $project->setOperatorGroup($operatorGroup[0]);
        }
        else{
            throw new \ErrorException('Error : you should create an operator group called "Unknown".');
        }
        
        if ( $common->requestFieldTest($request, 'add_tender_name')){
            $project->setProjectName($request->request->get('add_tender_name'));
        }
        else{
            return new Response("Error : you must enter a tender name.");
        }
        if ( $common->requestFieldTest($request, 'add_tender_oil_company') ){
            $oilCompany = $oilCompanyRepository->findById($request->request->get('add_tender_oil_company'));
            $project->setOilCompany($oilCompany[0]);
        }
        else{
            return new Response("Error : you must select an oil company.");
        }
        if ( $common->requestFieldTest($request, 'add_tender_country') ){
            if ($request->request->get('add_tender_country')[0] !== ''){
                $country = $countryRepository->findById($request->request->get('add_tender_country'));
                $project->setCountry($country[0]);
            }
            else{
                return new Response("Error : you must select a country.");
            }
        }
        else{
            return new Response("Error : you must select a country.");
        }
        if ( $common->requestFieldTest($request, 'add_tender_base') ){
            $base = $baseRepository->findById($request->request->get('add_tender_base'));
            $project->setBase($base[0]);
        }
        else{
            return new Response("Error : you must select a base.");
        }
        if ( $common->requestFieldTest($request, 'add_tender_status') ){
            $projectStatus = $projectStatusRepository->findById($request->request->get('add_tender_status'));
            $project->setProjectStatus($projectStatus[0]);
        }
        else{
            return new Response("Error : you must select a project status !");
        }
        if ( $common->requestFieldTest($request, 'add_tender_level')){
            $project->setProjectLevel($request->request->get('add_tender_level'));
        }
        else{
            $project->setProjectLevel(0);
        }
        if ( $common->requestFieldTest($request, 'add_tender_tender_out')){
            $project->setNextTenderIssue(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_tender_tender_out')));
        }
        if ( $common->requestFieldTest($request, 'add_tender_tender_closure')){
            $project->setNextTenderClosed(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_tender_tender_closure')));
        }
        if ( $common->requestFieldTest($request, 'add_tender_awarded')){
            $project->setContractAward(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_tender_awarded')));
        }
        if ( $common->requestFieldTest($request, 'add_tender_operations_start')){
            $project->setHelicopterOpsDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_tender_operations_start')));
        }
        if ( $common->requestFieldTest($request, 'add_tender_summary') ){
            $project->setSummary($request->request->get('add_tender_summary'));
        }
        if ( $common->requestFieldTest($request, 'add_tender_comment') ){
            $project->setOptionsComment($request->request->get('add_tender_comment'));
        }
        if ( $common->requestFieldTest($request, 'add_tender_confidential_link')){
            $project->setConfidentialLink($request->request->get('add_tender_confidential_link'));
        }
        if ( $common->requestFieldTest($request, 'add_tender_external_link')){
            $project->setExternalLink($request->request->get('add_tender_external_link'));
        }
        
        if ( $common->requestFieldTest($request, 'add_tender_mission_order') ){                  
            
            $mission = str_getcsv($request->request->get('add_tender_mission_order'), ','); 
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
            if ( $common->requestFieldTest($request, 'add_tender_platforms')){
                
                $common->buildFilterByKey('id', $keys, $filter, $request, 'add_tender_platforms');     
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
        
        if ( $common->requestFieldTest($request, 'add_tender_helicopter_category') ){
            
            $common->buildFilterByKey('id', $keys, $filter, $request, 'add_tender_helicopter_category');
            $helicopters = $common->findObject($filter, $keys, $helicopterRepository);
            
            foreach($helicopters as $helicopter){
                   
                $myHelicopterFleet = new Entity\AircraftFleet();
                
                $myHelicopterFleet->setProject($project);
                $myHelicopterFleet->setHelicopterCategory($helicopter);
                $myHelicopterFleet->setQuantity($request->request->get($helicopter->getHelicopterCategoryName()));
                
                $manager->persist($myHelicopterFleet);
                
            }
            
            $filter = array();
            $keys = array();
        }
        
        $manager->persist($project);
        
        try{
            $manager->flush();
            return new Response("Tender successfully saved !");
        } catch (Exception $ex) {
            echo "Exception thrown : " + $ex;
        }
    }
    
    /**
     * Controller which check data to expose on client side about tender details
     * @param Integer $id Id of the project user wishes to see more on detail
     * @return \Symfony\Component\HttpFoundation\Response Sample Symfony2 Response Object with an array of data
     */
    public function showTenderDetailAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $helicopterFleetRepository = $manager->getRepository("DatabaseBundle:AircraftFleet");
        $projectCommentRepository = $manager->getRepository("DatabaseBundle:ProjectComment");
        
        $project = $projectRepository->findById($id);
        
        if($project != null){
            $helicopterFleet = $helicopterFleetRepository->findByProject($project);
            $projectComments = $projectCommentRepository->findByProject($project);
            $myProject = $projectRepository->singleObjectBuilder($project[0]);
        }
        else{
            return new Response("Variable \$id doesn't contain an existing tender id !");
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
                    $myProject['helicopters'][$i]['name'] = $helicopter->getHelicopterCategory()->getHelicopterCategoryName();
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
        return $this->render('ContractBundle::tenderDetail.html.twig', array('data' => $myProject));    

    }
    
    /**
     * Function which check validity of form, persist (or not) changes of the tender and return a error/success message
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param Integer $id Id of the project user wishes to edit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editTenderAction(Request $request, $id){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        $helicopterRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        
        try{
            if($id != null){
                
                $project = $projectRepository->findById($id);
                $project = $project[0];
                
                if( $project != null){
                    if ( $common->requestFieldTest($request, 'edit_tender_name') ){
                        $myString = $request->request->get('edit_tender_name');
                        $project->setProjectName($myString);
                    }       
                    if ( $common->requestFieldTest($request, 'edit_tender_oil_company') ){
                        $oilCompany = $oilCompanyRepository->findById($request->request->get('edit_tender_oil_company'));
                        $project->setOilCompany($oilCompany[0]);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_base') ){
                        $base = $baseRepository->findById($request->request->get('edit_tender_base'));
                        $project->setBase($base[0]);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_country') ){
                        if ($request->request->get('edit_tender_country')[0] !== ''){
                            $country = $countryRepository->findById($request->request->get('edit_tender_country'));
                            $project->setCountry($country[0]);
                        }
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_level')){
                        $project->setProjectLevel($request->request->get('edit_tender_level'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_status') ){
                        $projectStatus = $projectStatusRepository->findById($request->request->get('edit_tender_status'));
                        $project->setProjectStatus($projectStatus[0]);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_tender_out') ){
                        $startDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_tender_tender_out'));
                        $project->setNextTenderIssue($startDate);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_tender_closure') ){
                        $endDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_tender_tender_closure'));
                        $project->setNextTenderClosed($endDate);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_awarded') ){
                        $endDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_tender_awarded'));
                        $project->setContractAward($endDate);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_operations_start') ){
                        $endDate = \DateTime::createFromFormat('m/d/Y', $request->request->get('edit_tender_operations_start'));
                        $project->setHelicopterOpsDate($endDate);
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_summary') ){
                        $project->setSummary($request->request->get('edit_tender_summary'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_options') ){
                        $project->setOptions($request->request->get('edit_tender_options'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_comment')){
                        $project->setOptionsComment($request->request->get('edit_tender_comment'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_confidential_link')){
                        $project->setConfidentialLink($request->request->get('edit_tender_confidential_link'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_external_link')){
                        $project->setExternalLink($request->request->get('edit_tender_external_link'));
                    }
                    if ( $common->requestFieldTest($request, 'edit_tender_mission_order') ){                  
                        
                        
                        $mission = str_getcsv($request->request->get('edit_tender_mission_order'), ',');
                        
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
                        if ( $common->requestFieldTest($request, 'edit_tender_remove_mission')){
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
                        
                        if ( $common->requestFieldTest($request, 'edit_tender_platforms')){
                
                            $common->buildFilterByKey('id', $keys, $filter, $request, 'edit_tender_platforms');     
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
                    if ( $common->requestFieldTest($request, 'edit_tender_helicopter_category') ){
                        
                        
                        $helicopterFleets = $project->getAircraftFleet();
                        
                        foreach($helicopterFleets as $helicopterFleet){
                            
                            $helicopterClass = $helicopterFleet->getHelicopterCategory();
                            
                            $project->removeAircraftFleet($helicopterFleet);
                            $helicopterClass->removeAircraftFleet($helicopterFleet);
                            
                            $manager->remove($helicopterFleet);
                        }
                        
                        $common->buildFilterByKey('id', $keys, $filter, $request, 'edit_tender_helicopter_category');
                        $helicopters = $common->findObject($filter, $keys, $helicopterRepository);

                        foreach($helicopters as $helicopter){

                            $myHelicopterFleet = new Entity\AircraftFleet();

                            $myHelicopterFleet->setProject($project);
                            $myHelicopterFleet->setHelicopterCategory($helicopter);
                            $myHelicopterFleet->setQuantity($request->request->get($helicopter->getHelicopterCategoryName()));

                            $manager->persist($myHelicopterFleet);

                        }

                        $filter = array();
                        $keys = array();
                    }
                    
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
                    return new Response("Error : this tender id does not exist !");
                }
            }
            else{
                return new Response("Error : given tender id is null !");
            }
        } 
        catch (Exception $ex) {
            echo "Exception thrown : " + $ex->getMessage();
        }
        
    }
    
    /**
     * Function which check validity of form, persist (or not) changes of the project and return a error/success message and also cause upgrade of project to tender
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $id Id of the project user wishes to upgrade
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \ErrorException
     */
    public function upgradeTenderAction(Request $request, $id){
        
        $manager = $this->getDoctrine()->getManager();       
        $common = $this->container->get('core.common');
        
        $project = $manager->getRepository('DatabaseBundle:Project')->find($id);
        $platformRepository = $manager->getRepository('DatabaseBundle:Platform');
        $projectStatusRepository = $manager->getRepository('DatabaseBundle:ProjectStatus');
        $missionAreaRepository = $manager->getRepository('DatabaseBundle:MissionArea');
        $operatorGroupRepository = $manager->getRepository('DatabaseBundle:OperatorGroup');
        
        if ($project != null){
            if ($common->requestFieldTest($request, 'upgrade_tender_operator_group')){
                
                $operatorGroup = $operatorGroupRepository->find($request->request->get('upgrade_tender_operator_group'));
                if ($operatorGroup !== null){
                    $project->setProjectName($operatorGroup);
                    $projectName = $operatorGroup->getOperatorGroupName() . " - " . $project->getOilCompany()->getOilCompanyName() . " - " . $project->getBase()->getBaseName();
                    $project->setProjectName($projectName);
                }
                else{
                    return new Response("Operator has not been found into database, please contact application administrator.");
                }
                
            }
            else{
                $operatorGroup = $operatorGroupRepository->findBy(array('operatorGroupName' => 'Unknown'));
                if ($operatorGroup !== null){
                    $project->setProjectName($operatorGroup);
                    $projectName = $operatorGroup->getOperatorGroupName() . " - " . $project->getOilCompany()->getOilCompanyName() . " - " . $project->getBase()->getBaseName();
                    $project->setProjectName($projectName);
                }
                else{
                    return new Response("Operator has not been found into database, please contact application administrator.");
                }
            }
            if ( $common->requestFieldTest($request, 'upgrade_tender_mission_order') ){                  
            
                $mission = str_getcsv($request->request->get('upgrade_tender_mission_order'), ','); 
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
            if ( $common->requestFieldTest($request, 'upgrade_tender_status')){
                $projectStatus = $projectStatusRepository->find($request->request->get('upgrade_tender_status'));
                $project->setProjectStatus($projectStatus);
            }
            else{
                return new Response("Error : you must select a contract status.");
            }
            if ($common->requestFieldTest($request, 'upgrade_tender_contract_start_year')){
                $project->setContractStartDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_tender_contract_start_year')));
            }
            if ($common->requestFieldTest($request, 'upgrade_tender_contract_end_year')){
                $project->setContractEndYear(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_tender_contract_end_year')));
                $endQuarter = \Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_tender_contract_end_year'))->format("m");
                $project->setContractEndQuarter($endQuarter);
            }
            if ($common->requestFieldTest($request, 'upgrade_tender_summary')){
                $project->setSummary($request->request->get('upgrade_tender_summary'));
            }
            if ($common->requestFieldTest($request, 'upgrade_tender_comment')){
                $project->setOptionsComment($request->request->get('upgrade_tender_comment'));
            }
            
            $missionAreas = $project->getMissionAreas();
                
            foreach($missionAreas as $missionArea){

                $missionTool = $missionArea->getMissionTool();

                $project->removeMissionArea($missionArea);
                $missionTool->removeMissionArea($missionArea);

                foreach($allMissionAreas = $missionAreaRepository->findByProject($missionArea) as $occur){
                    $projectArea = $occur->getProjectArea();
                    $projectArea->removeMissionArea($occur);
                }

                $manager->remove($missionArea);

            }
            
            $manager->persist($project);
        
            try{
                $manager->flush();
                return new Response("Project successfully upgraded !");
            } catch (Exception $ex) {
                echo "Exception thrown : " + $ex;
            }
        }
        else{
            throw new \ErrorException("Variable \$id does not contain valid project id.");
        }
        
    }
}