<?php

namespace SebaThomson\MyCommandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyCommandBundle:Default:index.html.twig', array('name' => $name));
    }
}
