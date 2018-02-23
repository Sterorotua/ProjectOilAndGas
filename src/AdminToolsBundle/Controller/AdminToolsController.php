<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace AdminToolsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminToolsBundle\Form\FilesType;
use DatabaseBundle\Entity\Files;
use DatabaseBundle\Entity;

class AdminToolsController extends Controller
{
    /**
     * Index function which return the admin tool page, initializing data
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){
        
        $myUsers = array();
        $myCountries = array();
        $i = 0;
        $manager = $this->getDoctrine()->getManager();       
        $userRepository = $manager->getRepository('DatabaseBundle:User');
        $countryRepository = $manager->getRepository('DatabaseBundle:Country');
        $geographicalAreaRepository = $manager->getRepository('DatabaseBundle:GeographicalArea');
        $businessAreaRepository = $manager->getRepository('DatabaseBundle:BusinessArea');
        
        $users = $userRepository->findAll();
        $countries = $countryRepository->findAll();
        $geographicalAreas = $geographicalAreaRepository->findAll();
        $businessAreas = $businessAreaRepository->findAll();
        
        if ($countries !== null){
            
           foreach($countries as $country){
               $myCountries[$i] = $countryRepository->singleObjectBuilder($country);
               $i++;
           } 
            
        }
      
        if ($users !== null){
            
            $i = 0;
            
            foreach($users as $user){
                $myUsers[$i] = $userRepository->singleObjectBuilder($user);
                $i++;
            }
            
        }
        
        if ($geographicalAreas !== null){
            $i = 0;
            
            foreach($geographicalAreas as $continent){
                $myContinents[$i] = $geographicalAreaRepository->singleObjectBuilder($continent);
                $i++;
            }
        }
        
        if ($businessAreas !== null){
            $i = 0;
            
            foreach($businessAreas as $businessArea){
                $myBusinessAreas[$i] = $businessAreaRepository->singleObjectBuilder($businessArea);
                $i++;
            }
        }
        
        return $this->render('AdminToolsBundle::adminTools.html.twig', array(
            'data' => $myUsers,
            'countries' => $myCountries,
            'continents' => $myContinents,
            'businessAreas' => $myBusinessAreas)
        );
    }
    
    /**
     * Function which is used to upload files to the server and process data
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \ErrorException
     */
    public function newFileAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        
        $myUsers = array();
        $i = 0;
        $compteur = 0;
        
        $manager = $this->getDoctrine()->getManager();       
        $userRepository = $manager->getRepository('DatabaseBundle:User');
        $geographicalAreaRepository = $manager->getRepository("DatabaseBundle:GeographicalArea");
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        $helicopterCategoryRepository = $manager->getRepository("DatabaseBundle:HelicopterCategory");
        $constructorRepository = $manager->getRepository("DatabaseBundle:Constructor");
        $helicopterClassRepository = $manager->getRepository("DatabaseBundle:HelicopterClass");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        
        $users = $userRepository->findAll();
        
        if ($users != null){
            
            foreach($users as $user){
                $myUsers[$i] = $userRepository->singleObjectBuilder($user);
                $i++;
            }
            
        }
        
        $fileEntity = new Files();
        $form = $this->createForm(FilesType::class, $fileEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $fileEntity->getFile();

            // Generate a unique name for the file before saving it
            $fileName = "airports_extract.".$file->guessExtension();

            // Move the file to the directory where files are stored
            $file->move($this->getParameter('files_directory'), $fileName);
            
            $handle = fopen($this->getParameter('files_directory')."/".$fileName, "r");
            
            if ($handle !== false){
                while ( ($data = fgetcsv($handle, 1000, ",") )){
                    
                    $country = $countryRepository->findBy(array('countryName' => $data[1]));
                    
                    if ($country != null){
                        
                        if ($data[1] === "Korea"){
                            if ($country[0]->getCountryFullName() === "Republic of Korea"){
                                $country = $country[0];
                            }
                            else{
                                $country = $country[1];
                            }
                        }
                        else{
                            $country = $country[0];
                        
                            $base = new \DatabaseBundle\Entity\Base();

                            $base->setBaseName($data[0]);
                            $base->setLatitude($data[3]);
                            $base->setLongitude($data[2]);
                            $base->setCountry($country);
                        }
                        
                    }
                    else{
                        throw new \ErrorException("Country \"" . $data[1] . "\"not found for airport " . $data[0]);
                    }
                    
                    $manager->persist($base);
                    
////                    $oilCompany = $oilCompanyRepository->findBy(array('oilCompanyName' => $data[0]));
////                    
////                    if ($oilCompany !== null){
////                        $oilCompany = $oilCompany[0];
////                        
////                        $oilCompanyAlias = new \DatabaseBundle\Entity\OilCompanyAlias();
////                    
////                        $oilCompanyAlias->setOilCompanyAliasName($data[1]);
////                        $oilCompanyAlias->setOilCompanyGroup($oilCompany);
////                        $manager->persist($oilCompanyAlias);
////                    }
////                    else{
////                        throw new \ErrorException("Unknown Oil Company " . $data[0] . " for alias " . $data[1]);
////                    }
//                    
//                    
////                    if ($helicopterClassRepository->findBy(array('helicopterClassName' => $data[1])) == null){
////                        $helicopterClass = new \DatabaseBundle\Entity\HelicopterClass();
////                        
////                        $manufacturer = $constructorRepository->findBy(array('constructorName' => $data[0]));
////                        $manufacturer = $manufacturer[0];
////                        
////                        $category = $helicopterCategoryRepository->findBy(array('helicopterCategoryName' => $data[3]));
////                        $category = $category[0];
////                        
////                        
////                        $helicopterClass->setHelicopterClassName($data[1]);
////                        $helicopterClass->setConstructor($manufacturer);
////                        $helicopterClass->setHelicopterCategory($category);
////                        
////                        $manager->persist($helicopterClass);
////                        $manager->flush();
////                    }
//                    
//                    
//                    
//                    
//////                    $country = new \DatabaseBundle\Entity\Country();
////                    $base = new \DatabaseBundle\Entity\Base();
////                    
////                    $country = $countryRepository->findBy(array('countryCode' => $data[8]));
////                    
//////                    $geographicalArea = $geographicalAreaRepository->findBy(array('geographicalAreaCode' => $data[1]));
////                    
////                    if ($country != null){
////                        
//////                        $geographicalArea = $geographicalArea[0];
//////                        $country->setGeographicalArea($geographicalArea);
//////                    
//////                        $country->setCountryCode($data[0]);
//////                        $country->setCountryName($data[2]);
//////                        $country->setCountryFullName($data[5]);
////                        
////                        $country = $country[0];
////                        if ($data[3] !== ""){
////                            $base->setBaseName($data[3]);
////                        }
////                        else{
////                            throw new \ErrorException("Missing airport \"name\".");
////                        }
////                        if ($data[6] !== ""){
////                            $base->setElevation($data[6]);
////                        }
////                        if ($data[4] !== ""){
////                            $base->setLatitude($data[4]);
////                        }
////                        else{
////                            throw new \ErrorException("Missing \"latitude\" aiport.");
////                        }
////                        if ($data[5] !== ""){
////                            $base->setLongitude($data[5]);
////                        }
////                        else{
////                            throw new \ErrorException("Missing \"longitude\" aiport.");
////                        }
////                        if ($data[13] !== ""){
////                            $base->setIataCode($data[13]);
////                        }
////                        if ($data[15] !== ""){
////                            $base->setAirportLink($data[15]);
////                        }
////                        
////                        $base->setCountry($country);
////                        
////                    }
////                    else{
////                        throw new \ErrorException("Unknown country : \"". $data[8] . "\" for airport \"". $data[0] . " - " . $data[3] . "\"") ;
////                    }
////                    
//////                    $manager->persist($country);
////                    $manager->persist($base);
////                    $compteur++;
////                    
////                    if ($compteur%10 == 0){
////                        $manager->flush();
////                    }
                }
                $manager->flush();
                
            }

            // Update the 'file' property to store the PDF file name
            // instead of its contents
            $fileEntity->setFile($fileName);

        }

        return $this->render('AdminToolsBundle::adminTools.html.twig', array(
            'form' => $form->createView(),
            'data' => $myUsers)
        );
    }
    
    /**
     * Function which allow admin to add a new aiport from form
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return Response
     */
    public function addAirportAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $manager = $this->getDoctrine()->getManager();
        $common = $this->container->get('core.common');
        
        $countryRepository = $manager->getRepository("DatabaseBundle:Country");
        
        if ($this->get('security.context')->isGranted('ROLE_ADMIN') !== true){
            return new Response("Error, you don't have access to this functionnality !");
        }
        else{
            $base = new \DatabaseBundle\Entity\Base();
            
            if ($common->requestFieldTest($request,'add_airport_name')){
                $base->setBaseName($request->request->get('add_airport_name'));
            }
            else{
                return new Response('Error : you must enter a base name.');
            }
            if ($common->requestFieldTest($request,'add_airport_country')){
                    $country = $countryRepository->find($request->request->get('add_airport_country'));
                    $base->setCountry($country);
            }
            else{
                return new Response('Error : you must pick a country.');
            }
            if ($common->requestFieldTest($request,'add_airport_latitude')){
                if ($request->request->get('add_airport_latitude') > 90 || $request->request->get('add_airport_latitude') < -90){
                    return new Response("Error : latitude value must be between -90.00 et +90.00 degrees.");
                }
                $base->setLatitude($request->request->get('add_airport_latitude'));
            }
            else{
                return new Response('Error : you must enter base latitude.');
            }
            if ($common->requestFieldTest($request,'add_airport_longitude')){
                if ($request->request->get('add_airport_longitude') > 90 || $request->request->get('add_airport_longitude') < -90){
                    return new Response("Error : longitude value must be between -180.00 et +180.00 degrees.");
                }
                $base->setLongitude($request->request->get('add_airport_longitude'));
            }
            else{
                return new Response('Error : you must enter base longitude.');
            }
            if ($common->requestFieldTest($request,'add_airport_elevation')){
                $base->setElevation($request->request->get('add_airport_elevation'));
            }
            if ($common->requestFieldTest($request,'add_airport_iata_code')){
                $base->setIataCode($request->request->get('add_airport_iata_code'));
            }
            if ($common->requestFieldTest($request,'add_airport_link')){
                $base->setAirportLink($request->request->get('add_airport_link'));
            }
            
            $manager->persist($base);
            $manager->flush();
            
            return new Response("Base successfully saved !");
        }
        
    }
    
    /**
     * Function which generate the "ALL" business area
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function businessAreaAllAction(){
        
        $manager = $this->getDoctrine()->getManager();       
        $countryRepository = $manager->getRepository('DatabaseBundle:Country');
        $businessAreaRepository = $manager->getRepository('DatabaseBundle:BusinessArea');
        
        $countries = $countryRepository->findAll();
        $businessArea = $businessAreaRepository->find(1);
        
        foreach ($countries as $country){
            
            $countryArea = new \DatabaseBundle\Entity\CountryArea();
            
            $countryArea->setBusinessArea($businessArea);
            $countryArea->setCountry($country);
            
            $manager->persist($countryArea);
            
        }
        
        $manager->flush();
        
        return new Response();
        
    }
    
    public function createCustomBusinessAreaAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $common = $this->container->get('core.common');
        $manager = $this->getDoctrine()->getManager();
        
        $countryRepository = $manager->getRepository('DatabaseBundle\Entity\Country');
        
        if ($this->get('security.context')->isGranted('ROLE_ADMIN') !== true){
            return new Response("Error, you don't have access to this functionnality !");
        }
        else{
            
            $businessArea = new \DatabaseBundle\Entity\BusinessArea();
            
            if ($common->requestFieldTest($request, 'add_business_area_name')){
                $businessArea->setBusinessAreaName($request->request->get('add_business_area_name'));
            }
            else{
                return new Response("Error : you must enter a valid business area name.");
            }
            if ($common->requestFieldTest($request, 'add_business_area_countries')){
                
                $filter = array();
                $keys = array();
                
                $common->buildFilterByKey('id', $keys, $filter, $request, 'add_business_area_countries');
                $countries = $common->findObject($filter, $keys, $countryRepository);
                
                foreach($countries as $country){
                    $countryArea = new \DatabaseBundle\Entity\CountryArea();
                    
                    $countryArea->setCountry($country);
                    $countryArea->setBusinessArea($businessArea);
                    
                    $manager->persist($countryArea);
                }
                
                $manager->persist($businessArea);
                
                $manager->flush();
                
                return new Response("Business area sucessfully saved !");
                
            }
            else{
                return new Response("Error : you must select at least one country for your business area.");
            }
            
        }
        
    }
    
    public function attributeBusinessAreaAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $common = $this->container->get('core.common');
        $manager = $this->getDoctrine()->getManager();
        
        $businessAreaRepository = $manager->getRepository('DatabaseBundle:BusinessArea');
        $userRepository = $manager->getRepository('DatabaseBundle:User');
        
        if ( $common->requestFieldTest($request, 'user_business_area') ){
            
            if ( $common->requestFieldTest($request, 'user_hidden_id') ){
                
                $user = $userRepository->find($request->request->get('user_hidden_id'));
                $businessArea = $businessAreaRepository->find($request->request->get('user_business_area'));
                
                if ($user !== null && $businessArea !== null){
                    $user->setBusinessArea($businessArea);
                    $manager->persist($user);
                }
                else{
                    return new Response("Error : user ID or business area ID might not existing.");
                }
                
            }
            else{
                return new Response("Error : User ID not found.");
            }
            
        }
        else{
            return new Response("Error : you must pick a business area.");
        }
        
        $manager->flush();
        
        return new Response('Business area "' . $businessArea->getBusinessAreaName() . '" sucessfully assigned to user "'. $user->getFirstName() . ' ' . $user->getLastName() . '" !');
        
    }
    
    public function operatorGroupsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        
        $i = 0;
        $compteur = 0;
        
        $manager = $this->getDoctrine()->getManager();   
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:OperatorGroup");
        
        $fileEntity = new Files();
        $form = $this->createForm(FilesType::class, $fileEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $fileEntity->getFile();

            // Generate a unique name for the file before saving it
            $fileName = "operators_extract.".$file->guessExtension();

            // Move the file to the directory where files are stored
            $file->move($this->getParameter('files_directory'), $fileName);
            
            $handle = fopen($this->getParameter('files_directory')."/".$fileName, "r");
            
            if ($handle !== false){
                while ( ($data = fgetcsv($handle, 1000, ";") )){
                    
//                    echo $i+1 . ". " . $data[0] . " - " . $data[1] . " - " . $data[2] . "<br>";
                    
                    $operatorGroup = $operatorGroupRepository->findBy(array('operatorGroupName' => $data[1]));
                    
                    if ($operatorGroup !== null){
                        $operatorAlias = new \DatabaseBundle\Entity\OperatorAlias();  
                        $operatorAlias->setOperatorAliasName($data[2]);
                        $operatorAlias->setOperatorGroup($operatorGroup[0]);
                        $manager->persist($operatorAlias);
                    }
                }
                
                $manager->flush();
                
            }

            // Update the 'file' property to store the PDF file name
            // instead of its contents
            $fileEntity->setFile($fileName);
            
            return new Response("<br>Done.");

        }

        return $this->render('AdminToolsBundle::account.html.twig', array('form' => $form->createView()));
    }
    
    public function contractsAction(\Symfony\Component\HttpFoundation\Request $request){
        $i = 0;
        $compteur = 0;
        
        $manager = $this->getDoctrine()->getManager();   
        $operatorGroupRepository = $manager->getRepository("DatabaseBundle:Project");
        
        $fileEntity = new Files();
        $form = $this->createForm(FilesType::class, $fileEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $fileEntity->getFile();

            // Generate a unique name for the file before saving it
            $fileName = "operators_extract.".$file->guessExtension();

            // Move the file to the directory where files are stored
            $file->move($this->getParameter('files_directory'), $fileName);
            
            $handle = fopen($this->getParameter('files_directory')."/".$fileName, "r");
            
            if ($handle !== false){
                while ( ($data = fgetcsv($handle, 1000, ";") )){
                    
                    $project = new \DatabaseBundle\Entity\Project();
                    
                    if ( $data[0] == ""){
                        throw new \ErrorException("Le contrat n'a pas d'ID new !");
                    }
                    else{
                        
                    }
                    
                }
                
                $manager->flush();
                
            }

            // Update the 'file' property to store the PDF file name
            // instead of its contents
            $fileEntity->setFile($fileName);
            
            return new Response("<br>Done.");

        }

        return $this->render('AdminToolsBundle::account.html.twig', array('form' => $form->createView()));
    }
    
    public function addOperatorGroupAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $common = $this->container->get('core.common');
        $manager = $this->getDoctrine()->getManager();
        
        $operatorGroupRepository = $manager->getRepository('DatabaseBundle:OperatorGroup');
        
        if ($common->requestFieldTest($request, 'add_operator_group_name')){
            $operatorGroup = new \DatabaseBundle\Entity\OperatorGroup();
            $operatorGroup->setOperatorGroupName($request->request->get('add_operator_group_name'));
        }
        else{
            return new Response("Error : you must enter an operator group name.");
        }
        if ($common->requestFieldTest($request, 'add_operator_super_group')){
            if ( ($globalOperatorGroup = $operatorGroupRepository->find($request->request->get('add_operator_super_group'))) !== null){
                $operatorGroup->setGlobalOperatorGroup($globalOperatorGroup);
            }
            else{
                return new Response("Error : invalid operator super group, please contact administrator.");
            }
        }
        else if ($common->requestFieldTest($request, 'add_operator_super_group_new')){
            $globalOperatorGroup = new \DatabaseBundle\Entity\GlobalOperatorGroup();
            $globalOperatorGroup->setGlobalOperatorGroupName($request->request->get('add_operator_super_group_new'));
            $operatorGroup->setGlobalOperatorGroup($globalOperatorGroup);
            $manager->persist($globalOperatorGroup);
        }
        else{
            $operatorGroup->setGlobalOperatorGroup(null);
        }
        $manager->persist($operatorGroup);
        $manager->flush();
        return new Response("New operator group " . $operatorGroup->getOperatorGroupName() . " successfully registered !");
    }
    
    public function addOilCompanyAction(\Symfony\Component\HttpFoundation\Request $request){
        
        $common = $this->container->get('core.common');
        $manager = $this->getDoctrine()->getManager();
        
        if ($common->requestFieldTest($request, 'add_oil_company_name')){
            $oilCompany = new \DatabaseBundle\Entity\OilCompany();
            $oilCompany->setOilCompanyName($request->request->get('add_oil_company_name'));
        }
        else{
            return new Response("Error : you must enter an oil company name.");
        }
        
        $manager->persist($oilCompany);
        $manager->flush();
        return new Response("New operator group " . $oilCompany->getOilCompanyName() . " successfully registered !");
    }
    
    public function accountAction(){
        return $this->render('AdminToolsBundle::account.html.twig');
    }
    
    public function updateProjectsNameAction(){
        
        $manager = $this->getDoctrine()->getManager();
        
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        
        $projects = $projectRepository->findBy(array('projectStatus' => array(1,2,3)));
        
        if ($projects !== null){
            foreach ($projects as $project){
                
                $projectName = "";
                
                if ( ($operatorGroup = $project->getOperatorGroup()) == null){
                    $projectName .= "Unknown - ";
                }
                else{
                    $projectName .= $operatorGroup->getOperatorGroupName() . " - ";
                }
                if ( ($oilCompany = $project->getOilCompany()) == null){
                    $projectName .= "Unknown - ";
                }
                else{
                    $projectName .= $oilCompany->getOilCompanyName() . " - ";
                }
                if ( ($base = $project->getBase()) == null){
                    $projectName .= "Unknown";
                }
                else{
                    $projectName .= $base->getBaseName();
                }
                $project->setProjectName($projectName);
                echo $projectName . "<br>";
                $manager->persist($project);
            }
            $manager->flush();
        }
        else{
            throw new \ErrorException("Error : no contracts found !");
        }
        
        return new Response("Done.");
    }
}
