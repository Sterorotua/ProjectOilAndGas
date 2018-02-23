<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        $myProjects = array();
        $myTenders = array();
        $finalProjects = array();
        $finalTenders = array();
        $user = $this->getUser();
        
        $manager = $this->getDoctrine()->getManager();
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        
        if ( ($businessArea = $user->getBusinessArea()) !== null){
            
            $countryAreas = $businessArea->getCountryArea();
            
            foreach ($countryAreas as $countryArea){
                $projects = $projectRepository->findBy(
                        array('country' => $countryArea->getCountry(),
                              'projectStatus' => array(8,9,10,11,12)
                        )
                );
                $tenders = $projectRepository->findBy(
                        array('country' => $countryArea->getCountry(),
                              'projectStatus' => array(4,5,6,7)
                        )
                );
                
                if ($projects !== null){
                    $myProjects = array_merge($myProjects, $projects);
                }
                if ($tenders !== null){
                    $myTenders = array_merge($myTenders, $tenders);
                }
            }
            
            usort($myProjects, function($a, $b){
                return $a->getProjectLevel() - $b->getProjectLevel();
            });
            usort($myTenders, function($a, $b){
                return $a->getProjectLevel() - $b->getProjectLevel();
            });
            
            $projectsLimit = count($myProjects) - 5;
            $tendersLimit = count($myTenders) - 5;
            
            if ($projectsLimit < 0){
                $projectsLimit = 0;
            }
            if ($tendersLimit < 0){
                $tendersLimit = 0;
            }
            
            $myProjects = array_slice($myProjects, $projectsLimit, count($myProjects), true);
            $myTenders = array_slice($myTenders, $tendersLimit, count($myTenders), true);
            
            foreach ($myProjects as $project){
                $finalProjects[] = $projectRepository->singleObjectBuilder($project);
            }
            foreach ($myTenders as $tender){
                $finalTenders[] = $projectRepository->singleObjectBuilder($tender);
            }
            
        }
        
        return $this->render('HomeBundle::home.html.twig', array(
            'tenders' => $finalTenders,
            'projects' => $finalProjects 
        ));
    }
    
    public function mapInitAction(){
        
        $finalData = array();
        
        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
        $user = $this->getUser();
        
        // On initialise notre entity manager pour récupérer les données en BDD
        $manager = $this->getDoctrine()->getManager();
        
        $numberOfProject = null;
        
        $countryAreaRepository = $manager->getRepository("DatabaseBundle:CountryArea");
        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
        
        if ( ($businessArea = $user->getBusinessArea()) != null ){
            
            if ( ($countryAreas = $countryAreaRepository->findByBusinessArea($businessArea)) != null ){
                
                foreach($countryAreas as $countryArea){
                    
                    $country = $countryArea->getCountry();
                    
                    $finalData[$country->getId()]['name'] = $country->getCountryName();
                    $finalData[$country->getId()]['projectNumber'] = $projectRepository->countProjectOnCountry($country->getId());
                    
                }
                
            }
            
        }
        return new Response(json_encode($finalData));
    }

}

//$projectsFinalArray = array();
//        
//        // On récupère l'objet de l'utilsateur qui a fait la demande d'accès à la page
//        $user = $this->getUser();
//        
//        // On initialise notre entity manager pour récupérer les données en BDD
//        $manager = $this->getDoctrine()->getManager();
//        
//        // On initialise les Repositories de nos Entities
//        $projectRepository = $manager->getRepository("DatabaseBundle:Project");
//        $projectCircuitRepository = $manager->getRepository("DatabaseBundle:ProjectCircuit");
//        
//        if ( ($businessArea = $user->getBusinessArea()) != null){
//            
//            if ( ($countries = $businessArea->getAreaName()) != null ){
//                
//                    // Pour chaque pays dans la businessArea de l'utilisateur
//                    foreach ($businessArea->getCountries() as $country){
//
//                    // On cherche chaque Project présent dans le pays courant
//                    $projects = $projectRepository->findByCountry($country->getId());
//
//                    // Pour chaque projet, on va chercher les différentes informations
//                    foreach ($projects as $project){
//
//                        $base = $project->getBase();
//
//                        if ($base->getOperatorGroup() != null){
//                            $operatorGroup = $base->getOperatorGroup()->getOperatorGroupName();
//                        }
//                        else{
//                            $operatorGroup = "-";
//                        }
//
//                        $projectsFinalArray[$project->getId()]['name'] = $project->getProjectName();
//                        $projectsFinalArray[$project->getId()]['base'] = array(
//                            'id' => $base->getId(),
//                            'name' => $base->getBaseName(),
//                            'operatorGroup' => $operatorGroup,
//                            'country' => $base->getCountry()->getCountryName(),
//                            'gps' => array( 'lat' => $base->getLatitude(),
//                                            'lng' => $base->getLongitude())
//                        );
//                        $memoire = "";
//                        foreach($projectCircuitRepository->findByProject($project) as $circuit){
//
//                            $i = $circuit->getOperationalMode()->getId();
//
//                            if ($i != $memoire){
//                                $memoire = $i;
//                                foreach($projectCircuitRepository->findByOperationalMode($memoire) as $entry){
//
//                                    if ( ($alternate = $entry->getOperationalMode()->getAlternate()) != null){
//                                        $projectsFinalArray[$project->getId()]['mission'][$i]['ending'] = array(
//                                            'name' => $alternate->getAlternateName(),
//                                            'gps' => array(
//                                                'lat' => $alternate->getLatitude(),
//                                                'lng' => $alternate->getLongitude()
//                                            )
//                                        );
//                                    }
//                                    else{
//                                        $projectsFinalArray[$project->getId()]['mission'][$i]['ending'] = array(
//                                            'name' => $base->getBaseName(),
//                                            'gps' => array(
//                                                'lat' => $base->getLatitude(),
//                                                'lng' => $base->getLongitude()
//                                            )
//                                        );
//                                    }
//
//                                    $platform = $entry->getPlatform();
//
//                                    if ($platform->getRefuellingOption()){
//                                        $refuellingOption = "Available";
//                                    }
//                                    else{
//                                        $refuellingOption = "Unavailable";
//                                    }
//
//                                    $projectsFinalArray[$project->getId()]['mission'][$i]['platform'.$platform->getId()] = array(
//                                        'id' => $platform->getId(),
//                                        'name' => $platform->getPlatformName(),
//                                        'order' => $circuit->getOrderNumber(),
//                                        'oilCompany' => $platform->getOilCompany()->getOilCompanyName(),
//                                        'dValue' => $platform->getHelideckDValue(),
//                                        'tValue' => $platform->getHelideckTValue(),
//                                        'refuellingOption' => $refuellingOption,
//                                        'bunkedBedNumber' => $platform->getbunkedBedNumber(),
//                                        'country' => $platform->getCountry()->getCountryName(),
//                                        'gps' => array( 'lat' => $platform->getLatitude(),
//                                                        'lng' => $platform->getLongitude())
//                                    );
//                                } 
//                            }
//                        }  
//                    }
//                }
//            }
//        }
//        
//        return new Response(json_encode($projectsFinalArray));