<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace ContractBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DatabaseBundle\Entity;

class ProjectController extends Controller
{

    /**
     * Index controller which will initialize basic forms related to projects
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        
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
        $allProjectStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Geophysics', 'Licensing', 'Drilling', 'Development', 'Operational')));
        
        foreach ($allProjectStatus as $oneProjectStatus ){
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
        return $this->render('ContractBundle::projects.html.twig', array( 'data' => $viewBuilder ));
    }
    
    
    /**
     * Initialize the form to add a contract by providing all required informations about contract
     * @return string[] Array of string data related to projects
     */
    public function initializeAddFormAction($id = null){
        
        // Initialisation de tableaux de données pour les différents champs Select de la page d'accueil des contrats
        $countries = array();
        $oilCompanies = array();
        $arrayProjectStatus = array();
        $bases = array();
        $helicopterCategories = array();
        $myProject = null;

        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();

        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();

        // On initialise les différents Repository
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");       
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $helicopterCategoryRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");

        // On exécute les requêtes via Doctrine
        $oilCompaniesRequest = $oilCompanyRepository->findAll();
        $allProjectStatus = $projectStatusRepository->findBy(array('projectStatusName' => array('Licensing', 'Geophysics', 'Drilling', 'Development', 'Operational')));
        $allHelicopterCategories = $helicopterCategoryRepository->findAll();
        
        if ($id !== null){
            $project = $projectRepository->find($id);
            $myProject = $projectRepository->singleObjectBuilder($project);
        }
        
        foreach($oilCompaniesRequest as $oilCompany){
            $oilCompanies[$oilCompany->getId()] = $oilCompanyRepository->singleObjectBuilder($oilCompany);
        }  

        foreach($allProjectStatus as $projectStatus){
            $arrayProjectStatus[$projectStatus->getId()] = $projectStatusRepository->singleObjectBuilder($projectStatus);
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
     * Function which check data transmitted by the user and insert into database new project
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \ErrorException
     */
    public function addProjectAction(Request $request){
        
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
        
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");   
        $operatorGroup = $operatorGroupRepository->findByOperatorGroupName('Unknown');
        
        if( $operatorGroup != null){
            $project->setOperatorGroup($operatorGroup[0]);
        }
        else{
            throw new \ErrorException('Error : you should create an operator group called "Unknown".');
        }
        
        if ( $common->requestFieldTest($request, 'add_project_longitude') || $common->requestFieldTest($request, 'add_project_latitude') ){
            if ( $common->requestFieldTest($request, 'add_project_longitude') && $common->requestFieldTest($request, 'add_project_latitude') ){
                
                $missionTool = new \DatabaseBundle\Entity\MissionTool();
                $missionArea = new \DatabaseBundle\Entity\MissionArea();
                $missionArea->setMissionTool($missionTool);
                $missionArea->setProject($project);
                
                
                $projectArea = new \DatabaseBundle\Entity\ProjectArea();
                $projectArea->setProjectAreaLatitude($request->request->get('add_project_latitude'));
                $projectArea->setProjectAreaLongitude($request->request->get('add_project_longitude'));
                
                $missionArea->setProjectArea($projectArea);
                
                $manager->persist($missionTool);
                $manager->persist($missionArea);
                $manager->persist($projectArea);
            }
            else{
                return new Response("Error : you must enter both latitude and longitude to locate a project area.");
            }
        }
        else{
            return new Response("Error : you must enter both latitude and longitude to locate a project area.");
        }
        
        if ( $common->requestFieldTest($request, 'add_project_summary') ){
            $project->setSummary($request->request->get('add_project_summary'));
        }
        else{
            return new Response("Error : you must enter a two-lines summary to describe the project.");
        }
        if ( $common->requestFieldTest($request, 'add_project_name')){
            $project->setProjectName($request->request->get('add_project_name'));
        }
        else{
            return new Response("Error : you must enter a project name.");
        }        
        if ( $common->requestFieldTest($request, 'add_project_oil_company') ){
            $oilCompany = $oilCompanyRepository->findById($request->request->get('add_project_oil_company'));
            $project->setOilCompany($oilCompany[0]);
        }
        else{
            return new Response("Error : you must select an oil company.");
        }
        if ( $common->requestFieldTest($request, 'add_project_country') ){
            $country = $countryRepository->findById($request->request->get('add_project_country'));
            $project->setCountry($country[0]);
        }
        else{
            return new Response("Error : you must select a country.");
        }
        if ( $common->requestFieldTest($request, 'add_project_base') ){
            $base = $baseRepository->findById($request->request->get('add_project_base'));
            $project->setBase($base[0]);
        }
        else{
            $base = $baseRepository->findBy(array('baseName' => "Unknown"));
            $project->setBase($base[0]);
        }
        if ( $common->requestFieldTest($request, 'add_project_status') ){
            $projectStatus = $projectStatusRepository->findById($request->request->get('add_project_status'));
            $project->setProjectStatus($projectStatus[0]);
        }
        else{
            return new Response("Error : you must select a project status.");
        }
        if ( $common->requestFieldTest($request, 'add_project_level')){
            $project->setProjectLevel($request->request->get('add_project_level'));
        }
        else{
            $project->setProjectLevel(0);
        }
        if ( $common->requestFieldTest($request, 'add_project_licensing_date')){
            $project->setLicensingDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_licensing_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_geophysics_date')){
            $project->setGeophysicsDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_geophysics_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_drilling_date')){
            $project->setDrillingDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_drilling_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_discovery_date')){
            $project->setDiscoveryDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_discovery_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_fid_date') ){
            $project->setFidDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_fid_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_development_date') ){
            $project->setDevelopmentDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_development_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_operational_date') ){
            $project->setOperationalDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('add_project_operational_date')));
        }
        if ( $common->requestFieldTest($request, 'add_project_comment') ){
            $project->setOptionsComment($request->request->get('add_project_comment'));
        }
        if ( $common->requestFieldTest($request, 'add_project_confidential_link')){
            $project->setConfidentialLink($request->request->get('add_project_confidential_link'));
        }
        if ( $common->requestFieldTest($request, 'add_project_external_link')){
            $project->setExternalLink($request->request->get('add_project_external_link'));
        }
        
        if ( $common->requestFieldTest($request, 'add_project_helicopter_category') ){
            
            $common->buildFilterByKey('id', $keys, $filter, $request, 'add_project_helicopter_category');
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
            return new Response("Project successfully saved !");
        } catch (Exception $ex) {
            echo "Exception thrown : " + $ex;
        }
    }
    
    /**
     * Function which return an array of result depending on filter parameters.
     * @param \Symfony\Component\HttpFoundation\Request $request The request contains the form to filter projects
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectAreaRepository = $manager->getRepository("DatabaseBundle:ProjectArea");
        $missionAreaRepository = $manager->getRepository("DatabaseBundle:MissionArea");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $aircraftFleetRepository = $manager->getRepository("DatabaseBundle:AircraftFleet");
        
        $allContractStatus = $manager->getRepository("DatabaseBundle:ProjectStatus")->findBy(array('projectStatusName' => array('Licensing', 'Geophysics', 'Drilling', 'Development', 'Operational')));
        
        try{
            
            if ( $common->requestFieldTest($request, 'project_operator') ){
                $common->buildFilterByKey('operatorGroup', $keys, $filter, $request, 'project_operator');
            }
            if ( $common->requestFieldTest($request, 'project_oil_company') ){
                $common->buildFilterByKey('oilCompany', $keys, $filter, $request, 'project_oil_company');
            }
            if ( $common->requestFieldTest($request, 'project_country') ){
                $common->buildFilterByKey('country', $keys, $filter, $request, 'project_country');
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
            if ( $common->requestFieldTest($request, 'project_base') ){
                $common->buildFilterByKey('base', $keys, $filter, $request, 'project_base');
            }
            if ( $common->requestFieldTest($request, 'project_status') ){
                $common->buildFilterByKey('projectStatus', $keys, $filter, $request,'project_status');
            }
            else{
                
                $key = 'projectStatus';
                $keys[] = $key;
                $filter[$key] = array();
                
                foreach ($allContractStatus as $contractStatus){
                    $filter[$key][] = $contractStatus->getId();
                }
            
            }
            if ( $common->requestFieldTest($request, 'project_level') ){
                $common->buildFilterByKey('projectLevel', $keys, $filter, $request,'project_level');
            }
            
            
            if ( $common->requestFieldTest($request, 'project_category') ){
                $aircraftFleets = $aircraftFleetRepository->findBy(array( 'helicopterCategory' => $request->request->get('project_category')));
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
                        
                        $projectArea = $missionAreaRepository->findByProject($project['id']);
                        
                        if ($projectArea != null){
                            // Notice the "[0]"
                            $projectArea = $projectArea[0]->getProjectArea();
                            $myProjects[$project['id']]['projectArea'] = $projectAreaRepository->singleObjectBuilder($projectArea);
                        }
                        
                        $base = $projectRepository->find($project['id'])->getBase();
                        $myProjects[$project['id']]['base'] = $baseRepository->singleObjectBuilder($base);
                    } 
                    catch (Exception $ex) {
                        echo "Exception thrown : " + $ex->getMessage();
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
     * Function which will load the content to see the detail of the project which matches the $id parameter.
     * @param int $id ID of the project user wishes to see more on detail
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showProjectDetailAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:MissionArea");
        $platformRepository = $manager->getRepository("DatabaseBundle:ProjectArea");
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
            return new Response("Variable \$id doesn't contain an existing project id !");
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
                    
                    $projectArea = $projectCircuit->getProjectArea();           
                    $myProject['projectArea'][$projectArea->getId()] = $platformRepository->singleObjectBuilder($projectArea);
                    
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
        return $this->render('ContractBundle::projectDetail.html.twig', array('data' => $myProject));    

    }
    
    /**
     * Function which initialize necessaries data (base and project area) for map drawing
     * @param int $id Id of the project user wishes to display on map
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

        foreach ( $manager->getRepository("DatabaseBundle:MissionArea")->findByProject($project) as $missionArea ) {
            $myProject['projectArea'] = $manager->getRepository("DatabaseBundle:ProjectArea")->singleObjectBuilder($missionArea->getProjectArea());
        }
        
        return new Response(json_encode($myProject));
        
    }
    
    /**
     * Function which check validity of form, persist (or not) changes of the project and return a error/success message
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $id Id of the project user wishes to edit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editProjectAction(Request $request, $id){
        
        $keys = array();
        $filter = array();
        
        $manager = $this->getDoctrine()->getManager();
        
        $common = $this->container->get('core.common');
        
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $projectStatusRepository = $manager->getRepository("DatabaseBundle:ProjectStatus");
        $helicopterRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $aircraftFleetRepository = $manager->getRepository("DatabaseBundle:AircraftFleet");
        $missionAreaRepository = $manager->getRepository("DatabaseBundle:MissionArea");
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        
        $project = $projectRepository->findById($id);
        
        if($project != null){
            $project = $project[0];
        }
        else{
            return new Response("Error : the project you are looking for doesn't exist !");
        }
        
        if ( $common->requestFieldTest($request, 'edit_project_longitude') || $common->requestFieldTest($request, 'edit_project_latitude') ){
            if ( $common->requestFieldTest($request, 'edit_project_longitude') && $common->requestFieldTest($request, 'edit_project_latitude') ){
                
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
                
                $missionTool = new \DatabaseBundle\Entity\MissionTool();
                $missionArea = new \DatabaseBundle\Entity\MissionArea();
                $missionArea->setMissionTool($missionTool);
                $missionArea->setProject($project);
                
                
                $projectArea = new \DatabaseBundle\Entity\ProjectArea();
                $projectArea->setProjectAreaLatitude($request->request->get('edit_project_latitude'));
                $projectArea->setProjectAreaLongitude($request->request->get('edit_project_longitude'));
                
                $missionArea->setProjectArea($projectArea);
                
                $manager->persist($missionTool);
                $manager->persist($missionArea);
                $manager->persist($projectArea);
            }
            else{
                return new Response("Error : you must enter both latitude and longitude to locate a project area.");
            }
        }
        
        if ( $common->requestFieldTest($request, 'edit_project_summary') ){
            $project->setSummary($request->request->get('edit_project_summary'));
        }
        if ( $common->requestFieldTest($request, 'edit_project_name')){
            $project->setProjectName($request->request->get('edit_project_name'));
        }        
        if ( $common->requestFieldTest($request, 'edit_project_oil_company') ){
            $oilCompany = $oilCompanyRepository->findById($request->request->get('edit_project_oil_company'));
            $project->setOilCompany($oilCompany[0]);
        }
        if ( $common->requestFieldTest($request, 'edit_project_country') ){
            if ($request->request->get('edit_project_country')[0] !== ''){
                $country = $countryRepository->findById($request->request->get('edit_project_country'));
                $project->setCountry($country[0]);
            }
        }
        if ( $common->requestFieldTest($request, 'edit_project_base') ){
            $base = $baseRepository->findById($request->request->get('edit_project_base'));
            $project->setBase($base[0]);
        }
        if ( $common->requestFieldTest($request, 'edit_project_level')){
            $project->setProjectLevel($request->request->get('edit_project_level'));
        }
        if ( $common->requestFieldTest($request, 'edit_project_status') ){
            $projectStatus = $projectStatusRepository->findById($request->request->get('edit_project_status'));
            $project->setProjectStatus($projectStatus[0]);
        }       
        if ( $common->requestFieldTest($request, 'edit_project_licensing_date')){
            $project->setLicensingDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_licensing_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_geophysics_date')){
            $project->setGeophysicsDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_geophysics_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_drilling_date')){
            $project->setDrillingDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_drilling_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_discovery_date')){
            $project->setDiscoveryDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_discovery_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_fid_date') ){
            $project->setFidDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_fid_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_development_date') ){
            $project->setDevelopmentDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_development_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_operational_date') ){
            $project->setOperationalDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('edit_project_operational_date')));
        }
        if ( $common->requestFieldTest($request, 'edit_project_comment') ){
            $project->setOptionsComment($request->request->get('edit_project_comment'));
        }
        if ( $common->requestFieldTest($request, 'edit_project_confidential_link')){
            $project->setConfidentialLink($request->request->get('edit_project_confidential_link'));
        }
        if ( $common->requestFieldTest($request, 'edit_project_external_link')){
            $project->setExternalLink($request->request->get('edit_project_external_link'));
        }
        
        if ( $common->requestFieldTest($request, 'edit_project_helicopter_category') ){
            
            $common->buildFilterByKey('id', $keys, $filter, $request, 'edit_project_helicopter_category');
            $helicopters = $common->findObject($filter, $keys, $helicopterRepository);
            
            $aircraftFleets = $aircraftFleetRepository->findByProject($project);
            
            foreach($aircraftFleets as $aircraftFleet){
                
                $helicopterCategory = $aircraftFleet->getHelicopterCategory();
                
                $helicopterCategory->removeAircraftFleet($aircraftFleet);
                $project->removeAircraftFleet($aircraftFleet);
                
                $manager->remove($aircraftFleet);
                
            }
            
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
            return new Response("Project successfully saved !");
        } catch (Exception $ex) {
            echo "Exception thrown : " + $ex;
        }
        
    }
    
    /**
     * Function which check validity of form, persist (or not) changes of the project and return a error/success message and also cause upgrade of project to tender
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $id Id of the project user wishes to upgrade
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \ErrorException
     */
    public function upgradeProjectAction(Request $request, $id){
        
        $manager = $this->getDoctrine()->getManager();       
        $common = $this->container->get('core.common');
        
        $project = $manager->getRepository('DatabaseBundle:Project')->find($id);
        $platformRepository = $manager->getRepository('DatabaseBundle:Platform');
        $projectStatusRepository = $manager->getRepository('DatabaseBundle:ProjectStatus');
        $missionAreaRepository = $manager->getRepository('DatabaseBundle:MissionArea');
        
        if ($project != null){
            if ($common->requestFieldTest($request, 'upgrade_project_name')){
                $string = $request->request->get('upgrade_project_name');
                $project->setProjectName($string);
            }
            if ( $common->requestFieldTest($request, 'upgrade_project_mission_order') ){                  
            
                $mission = str_getcsv($request->request->get('upgrade_project_mission_order'), ','); 
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
            if ( $common->requestFieldTest($request, 'upgrade_project_status')){
                $projectStatus = $projectStatusRepository->find($request->request->get('upgrade_project_status'));
                $project->setProjectStatus($projectStatus);
            }
            else{
                return new Response("Error : you must select a tender status.");
            }
            if ($common->requestFieldTest($request, 'upgrade_project_tender_out')){
                $project->setNextTenderIssue(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_project_tender_out')));
            }
            if ($common->requestFieldTest($request, 'upgrade_project_tender_closure')){
                $project->setNextTenderClosed(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_project_tender_closure')));
            }
            if ($common->requestFieldTest($request, 'upgrade_project_award')){
                $project->setContractAward(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_project_award')));
            }
            if ($common->requestFieldTest($request, 'upgrade_project_operations_start')){
                $project->setHelicopterOpsDate(\Datetime::createFromFormat('m/d/Y', $request->request->get('upgrade_project_operations_start')));
            }
            if ($common->requestFieldTest($request, 'upgrade_project_summary')){
                $project->setSummary($request->request->get('upgrade_project_summary'));
            }
            if ($common->requestFieldTest($request, 'upgrade_project_comment')){
                $project->setOptionsComment($request->request->get('upgrade_project_comment'));
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
    
    /**
     * Function which will search and load airports for the requested country
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchBasesAction(Request $request){
        
        $keys = array();
        $filter = array();
        
        $common = $this->container->get('core.common');
        
        $baseRepository = $this->getDoctrine()->getManager()->getRepository("DatabaseBundle:Base");
        
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
        
        $result = $common->findObject($filter, $keys, $baseRepository);
        $myBases = $common->objectDataBuilder($result, $baseRepository);
        
        usort($myBases, function($a, $b){
            return strcmp($a["name"], $b["name"]);
        });
        
        return new Response(json_encode($myBases));
        
    }
    
}