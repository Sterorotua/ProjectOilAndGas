<?php

namespace AircraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    public function indexAction()
    {
        return $this->render('AircraftBundle:Base:base.html.twig');
    }
}
