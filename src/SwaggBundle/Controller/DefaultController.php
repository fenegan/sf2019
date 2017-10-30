<?php

namespace SwaggBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="home")
     */
    public function indexAction($name = "World")
    {
        return $this->render('SwaggBundle:Default:index.html.twig',
                             ['name' => $name]);
    }
    
    /**
     * @Route("/page2", name="page2")
     */
    public function page2Action()
    {
        return $this->render('SwaggBundle:Default:page2.html.twig');
    }
}
