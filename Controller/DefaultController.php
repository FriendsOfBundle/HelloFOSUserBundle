<?php

namespace FOB\HelloUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FOBHelloUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
