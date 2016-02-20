<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Preguntas;
use JustCode\Bundle\actividadesBundle\Form\PreguntasType;

use JustCode\Bundle\actividadesBundle\Entity\Respuestascorrectas;
use JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType;

use JustCode\Bundle\actividadesBundle\Entity\Respuestas;
use JustCode\Bundle\actividadesBundle\Form\RespuestasType;
use Symfony\Component\PropertyAccess\PropertyAccess;

class CuestionesController extends Controller
{
     //Este es un twig de pruebas para AJAX, si funciona, se queda.
    
    public function truefalsoAction(){
        
        $em = $this->getDoctrine()->getManager();
        
        $dql = "SELECT a.enunciado,a.id FROM JustCodeactividadesBundle:Preguntas a WHERE a.tipo=1 ORDER BY a.id";
        $query = $em->createQuery($dql);
        $res_pregunta = $query->getResult();
        $n_preg = count($res_pregunta);
        $random_num = rand(1,$n_preg -1);
        $enunciado_preg = strval($res_pregunta[$random_num]['enunciado']);
        $id_preg = $res_pregunta[$random_num]['id'];
        //var_dump($id_preg);
        
        $dql_correcta = "SELECT c.respuestaOk FROM JustCodeactividadesBundle:Respuestascorrectas c WHERE c.idPregunta='$id_preg'";
        $query_correcta = $em->createQuery($dql_correcta);
        $res_correcta = $query_correcta->getResult();
        //$comprobacion = strval($res_correcta[0]['respuestaOk']);
        
        
        return $this->render('JustCodeactividadesBundle:Cuestiones:truefalso.html.twig', array(
            'preguntas' => $enunciado_preg,
            'correcta' => $res_correcta,
        ));
    }
}