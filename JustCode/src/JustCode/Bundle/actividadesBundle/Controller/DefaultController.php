<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Niveles;
use JustCode\Bundle\actividadesBundle\Form\NivelesType;

use JustCode\Bundle\actividadesBundle\Entity\Preguntas;
use JustCode\Bundle\actividadesBundle\Form\PreguntasType;

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
        $respuestas = $em->getRepository('JustCodeactividadesBundle:Respuestas')->findAll();

        return $this->render('JustCodeactividadesBundle:Default:testType.html.twig', array(
            "preguntas"=>$preguntas, "respuestas"=>$respuestas,
            ));
    }
    
     public function verdaderofalsoAction()
    {
        return $this->render('JustCodeactividadesBundle:Default:verdaderofalso.html.twig');
    }
    
    public function principalAction(){
        
        return $this->render('JustCodeactividadesBundle:Default:principal.html.twig');
        
    }
    
    
}