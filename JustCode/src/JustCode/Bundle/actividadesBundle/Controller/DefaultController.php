<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:index.html.twig');
    }
    
     public function compilatorAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:compilator.html.twig');
    }
    
     public function testTypeAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:testType.html.twig');
    }
    
     public function verdaderofalsoAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:verdaderofalso.html.twig');
    }
    
    public function principalAction(){
        
        return $this->render('JustCodeactividadesBundle:Default:principal.html.twig');
        
    }
    
    
}