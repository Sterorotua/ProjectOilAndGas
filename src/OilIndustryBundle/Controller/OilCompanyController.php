<?php

namespace OilIndustryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OilCompanyController extends Controller
{
    public function indexAction()
    {
        return $this->render('OilIndustryBundle:OilCompany:oilCompany.html.twig');
    }
}
