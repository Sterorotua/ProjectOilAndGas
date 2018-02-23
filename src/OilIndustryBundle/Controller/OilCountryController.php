<?php

namespace OilIndustryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OilCountryController extends Controller
{
    public function indexAction()
    {
        return $this->render('OilIndustryBundle:OilCountry:oilCountry.html.twig');
    }
}
