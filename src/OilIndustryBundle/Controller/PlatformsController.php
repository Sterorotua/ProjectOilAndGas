<?php

namespace OilIndustryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PlatformsController extends Controller
{
    public function indexAction()
    {
        $viewBuilder = array();
        
        $manager = $this->getDoctrine()->getManager();
        $common = $this->container->get('core.common');


        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");

        $myPlatform = $common->findObject($platformRepository);

        if (!empty($myPlatform)){
            $viewBuilder['Platforms'] = $myPlatform;
        }

        return $this->render('OilIndustryBundle::platform.html.twig', array( 'data' => $viewBuilder ));

        //return $this->render('OilIndustryBundle:Platforms:platform.html.twig', array( 'data' => $myPlatform ));
    }


    
    public function platformDetailAction($id){
        
        $manager = $this->getDoctrine()->getManager();
        
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        
        $platform = $platformRepository->find($id);
        
        if ($platform == null){
            throw new \ErrorException("Id passed by parameter is not a valid platform id.");
        }
        else{
            $myPlatform = $platformRepository->singleObjectBuilder($platform);    
            $base = $platform->getBase();

            if ($base != null){
                $myPlatform['base'] = $baseRepository->singleObjectBuilder($base);
            }

            return $this->render('OilIndustryBundle:Platforms:platformDetail.html.twig', array('data' => $myPlatform));
        }
           
    }
    
    public function platformDetailMapAction($id){
        
        $platformRepository = $this->getDoctrine()->getManager()->getRepository("DatabaseBundle:Platform");
        
        $platform = $platformRepository->find($id);
        
        if ($platform == null){
            throw new \ErrorException("Id passed by parameter is not a valid platform id.");
        }
        else{
            $myPlatform = $platformRepository->singleObjectBuilder($platform); 
            
            return new Response(json_encode($myPlatform));
        }
        
    }
    
    public function editPlatformAction(\Symfony\Component\HttpFoundation\Request $request, $id = null){
        
        $manager = $this->getDoctrine()->getManager();
        $common = $this->container->get('core.common');
        
        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");
        $baseRepository = $manager->getRepository("DatabaseBundle:Base");
        $oilCompanyRepository = $manager->getRepository("DatabaseBundle:OilCompany");
        $platformStatusRepository = $manager->getRepository("DatabaseBundle:PlatformStatus");
        
        if ($id !== null){
            
            if ( ($platform = $platformRepository->find($id)) !== null ){
                
                if ($common->requestFieldTest($request, 'edit_platform_base')){
                    
                    if ( ($base = $baseRepository->find($request->request->get('edit_platform_base'))) !== null){
                        $platform->setBase($base);
                    }
                    else{
                        return new Response("Error : there is not base in database with such id. Please contact administrator.");
                    }
                    
                }
                if ($common->requestFieldTest($request, 'edit_platform_oil_company')){
                    
                    if ( ($oilCompany = $oilCompanyRepository->find($request->request->get('edit_platform_oil_company'))) !== null ){
                        $platform->setOilCompany($oilCompany);
                    }
                    else{
                        return new Response("Error : there is not oil company in database with such id. Please contact administrator.");
                    }
                    
                }
                if ($common->requestFieldTest($request, 'edit_platform_status')){
                    
                    if ( ($platformStatus = $platformStatusRepository->find($request->request->get('edit_platform_status'))) !== null ){
                        $platform->setPlatformStatus($platformStatus);
                    }
                    else{
                        return new Response("Error : there is not platform status in database with such id. Please contact administrator.");
                    }
                    
                }
                if ($common->requestFieldTest($request, 'edit_platform_dValue')){
                    $platform->setHelideckDValue($request->request->get('edit_platform_dValue'));
                }
                if ($common->requestFieldTest($request, 'edit_platform_tValue')){
                    $platform->setHelideckTValue($request->request->get('edit_platform_tValue'));
                }
                if ($common->requestFieldTest($request, 'edit_platform_start_date')){
                    $platform->setPlatformDate(\DateTime::createFromFormat('m/d/Y', $request->request->get('edit_platform_start_date')));
                }
                if ($common->requestFieldTest($request, 'edit_platform_end_date')){
                    $platform->setPlatformRemovalDate(\DateTime::createFromFormat('m/d/Y', $request->request->get('edit_platform_end_date')));
                }
                if ($common->requestFieldTest($request, 'edit_platform_nearest_base_distance')){
                    $platform->setNearestBaseDistance($request->request->get('edit_platform_nearest_base_distance'));
                }
                if ($common->requestFieldTest($request, 'edit_platform_coast_distance')){
                    $platform->setCoastDistance($request->request->get('edit_platform_coast_distance'));
                }
                if ($common->requestFieldTest($request, 'edit_platform_bunked_bed_number')){
                    $platform->setBunkedBedNumber($request->request->get('edit_platform_bunked_bed_number'));
                }
                if ($common->requestFieldTest($request, 'edit_platform_refuelling_option')){
                    if ($platform->getRefuellingOption() !== true){
                        $platform->setRefuellingOption(true);
                    }
                }
                else{
                    if ($platform->getRefuellingOption() !== false){
                        $platform->setRefuellingOption(false);
                    }
                }
                
                $manager->persist($platform);
            }
            else{
                return new Response("Error : there is not platform in database with such id. Please contact administrator.");
            }
            
        }
        else{
            return new Response("Error : there is not platform in database with such id. Please contact administrator.");
        }
        $manager->flush();
        return new Response("Platform changes successfully saved !");
    }
    
    public function initializeEditPlatformFormAction($id = null){
        
        $viewBuilder = array();
        $myPlatformStatus = array();
        $myOilCompanies = array();
        $myBases = array();
        $myPlatform = null;
        
        $manager = $this->getDoctrine()->getManager();
        

        $platformRepository = $manager->getRepository("DatabaseBundle:Platform");

        if ( ($platform = $platformRepository->find($id)) !== null ){
            
            $country = $platform->getCountry();
            $bases = $country->getBases();
            
            $myPlatform = $platformRepository->singleObjectBuilder($platform);
            
        }
        else{
            return new Response("Error : we can't find the platform country.");
        }


        if($myPlatform !== null){
            $viewBuilder['platform'] = $myPlatform;
        }

        $viewBuilder = json_encode($viewBuilder);

        return new Response($viewBuilder);  
        
    }
}
