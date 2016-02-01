<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Preguntas;
use JustCode\Bundle\actividadesBundle\Form\PreguntasType;

use JustCode\Bundle\actividadesBundle\Entity\Respuestascorrectas;
use JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType;

use JustCode\Bundle\actividadesBundle\Entity\Respuestas;
use JustCode\Bundle\actividadesBundle\Form\RespuestasType;

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
        $em = $this->getDoctrine()->getManager();
        $preguntas = $em->getRepository('JustCodeactividadesBundle:Preguntas')->findAll();
        
        return $this->render('JustCodeactividadesBundle:Default:testType.html.twig', array(
            'preguntas' => $preguntas,
        ));
    }
    
     public function verdaderofalsoAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:verdaderofalso.html.twig');
    }
    
    public function principalAction(){
        
        return $this->render('JustCodeactividadesBundle:Default:principal.html.twig');
        
    }
    
    public function perfilAction(){
        
        return $this->render('JustCodeactividadesBundle:Default:perfil.html.twig');
        
    }
    
    
}