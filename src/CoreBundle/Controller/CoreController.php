<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Default:index.html.twig');
    }
    
    public function extractCSVAction(Request $request){
        
        $manager = $this->getDoctrine()->getManager();
        var_dump($request->request->get('upload_country_csv'));
        $countryFile = file_get_contents($request->request->get('upload_country_csv'));
        
        
        $geographicalAreaRepository = $manager->getRepository("DatabaseBundle:GeographicalArea");
        $geographicalAreas = $geographicalAreaRepository->findAll();
        
        if( $countryFile ){
            
            while( ($data = fgetcsv($countryFile, 0, ";")) !== false){
                
                $country = new \DatabaseBundle\Entity\Country();
                
                $country->setId($data[4]);
                $country->setCountryCode($data[0]);
                $country->setCountryName($data[2]);
                $country->setCountryName($data[3]);
                $country->setCountryFullName($data[5]);
                
            }
            
        }
        else{
            
        }
        
        return $this->render('AdminToolsBundle::adminTools.html.twig');
        
    }
   
}
