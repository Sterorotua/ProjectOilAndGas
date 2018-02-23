<?php

namespace AircraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelicopterController extends Controller
{
    public function indexAction()
    {
        return $this->render('AircraftBundle:Helicopter:helicopter.html.twig');
    }
}
