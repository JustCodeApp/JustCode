<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Respuestas;
use JustCode\Bundle\actividadesBundle\Form\RespuestasType;

/**
 * Respuestas controller.
 *
 */
class RespuestasController extends Controller
{
    /**
     * Lists all Respuestas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $respuestas = $em->getRepository('JustCodeactividadesBundle:Respuestas')->findAll();

        return $this->render('respuestas/index.html.twig', array(
            'respuestas' => $respuestas,
        ));
    }

    /**
     * Creates a new Respuestas entity.
     *
     */
    public function newAction(Request $request)
    {
        $respuesta = new Respuestas();
        $form = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestasType', $respuesta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuesta);
            $em->flush();

            return $this->redirectToRoute('respuestas_show', array('id' => $respuesta->getId()));
        }

        return $this->render('respuestas/new.html.twig', array(
            'respuesta' => $respuesta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Respuestas entity.
     *
     */
    public function showAction(Respuestas $respuesta)
    {
        $deleteForm = $this->createDeleteForm($respuesta);

        return $this->render('respuestas/show.html.twig', array(
            'respuesta' => $respuesta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Respuestas entity.
     *
     */
    public function editAction(Request $request, Respuestas $respuesta)
    {
        $deleteForm = $this->createDeleteForm($respuesta);
        $editForm = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestasType', $respuesta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuesta);
            $em->flush();

            return $this->redirectToRoute('respuestas_edit', array('id' => $respuesta->getId()));
        }

        return $this->render('respuestas/edit.html.twig', array(
            'respuesta' => $respuesta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Respuestas entity.
     *
     */
    public function deleteAction(Request $request, Respuestas $respuesta)
    {
        $form = $this->createDeleteForm($respuesta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($respuesta);
            $em->flush();
        }

        return $this->redirectToRoute('respuestas_index');
    }

    /**
     * Creates a form to delete a Respuestas entity.
     *
     * @param Respuestas $respuesta The Respuestas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Respuestas $respuesta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respuestas_delete', array('id' => $respuesta->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
