<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
        
        //Redirigir si no esta logueado
        
        if($this->getUser() == null){

            return $this->redirectToRoute('fos_user_security_login');
            
        }
        
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
    
    public function tipoTestAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        //Redirigir si no esta logueado
        
        if($this->getUser() == null){

            return $this->redirectToRoute('fos_user_security_login');
            
        }
        
        $dql = "SELECT a.enunciado,a.id FROM JustCodeactividadesBundle:Preguntas a WHERE a.tipo=3 ORDER BY a.id";
        $query = $em->createQuery($dql);
        $res_pregunta = $query->getResult();
        $n_preg = count($res_pregunta);
        $random_num = rand(0,$n_preg -1);
        $enunciado_preg = strval($res_pregunta[$random_num]['enunciado']);
        $id_preg = $res_pregunta[$random_num]['id'];
        //var_dump($id_preg);
        
        $dql_respuestas = "SELECT b.enunciado FROM JustCodeactividadesBundle:Respuestas b WHERE b.idPregunta ='$id_preg'";
        $query_preguntas = $em->createQuery($dql_respuestas);
        $res_respuesta = $query_preguntas->getResult();
        //var_dump($res_respuesta);
        
        $dql_correcta = "SELECT c.respuestaOk FROM JustCodeactividadesBundle:Respuestascorrectas c WHERE c.idPregunta='$id_preg'";
        $query_correcta = $em->createQuery($dql_correcta);
        $res_correcta = $query_correcta->getResult();
        // $comprobacion = strval($res_correcta[0]['respuestaOk']);
        //var_dump($comprobacion);
        //var_dump($res_pregunta[$random_num]['id']);
        /*var_dump($random_num);
        var_dump($res_pregunta);
        var_dump($enunciado_preg);*/
        
        return $this->render('JustCodeactividadesBundle:Default:testType.html.twig', array(
            'preguntas' => $enunciado_preg,
            'respuestas'=> $res_respuesta,
            //'correcta'=> $res_correcta,
        ));
    }
    
}