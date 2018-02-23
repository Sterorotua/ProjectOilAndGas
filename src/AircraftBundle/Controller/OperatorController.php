<?php

namespace AircraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OperatorController extends Controller
{
    public function indexAction()
    {
        return $this->render('AircraftBundle:Operator:operator.html.twig');
    }
}
