<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Respuestascorrectas;
use JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType;

/**
 * Respuestascorrectas controller.
 *
 */
class RespuestascorrectasController extends Controller
{
    /**
     * Lists all Respuestascorrectas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $respuestascorrectas = $em->getRepository('JustCodeactividadesBundle:Respuestascorrectas')->findAll();

        return $this->render('respuestascorrectas/index.html.twig', array(
            'respuestascorrectas' => $respuestascorrectas,
        ));
    }

    /**
     * Creates a new Respuestascorrectas entity.
     *
     */
    public function newAction(Request $request)
    {
        $respuestascorrectas = new Respuestascorrectas();
        $form = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType', $respuestascorrectas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestascorrectas);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_show', array('id' => $respuestascorrectas->getId()));
        }

        return $this->render('respuestascorrectas/new.html.twig', array(
            'respuestascorrecta' => $respuestascorrectas,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Respuestascorrectas entity.
     *
     */
    public function showAction(Respuestascorrectas $respuestascorrectas)
    {
        $deleteForm = $this->createDeleteForm($respuestascorrectas);

        return $this->render('respuestascorrectas/show.html.twig', array(
            'respuestascorrecta' => $respuestascorrectas,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Respuestascorrectas entity.
     *
     */
    public function editAction(Request $request, Respuestascorrectas $respuestascorrectas)
    {
        $deleteForm = $this->createDeleteForm($respuestascorrectas);
        $editForm = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType', $respuestascorrectas);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestascorrectas);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_edit', array('id' => $respuestascorrectas->getId()));
        }

        return $this->render('respuestascorrectas/edit.html.twig', array(
            'respuestascorrecta' => $respuestascorrectas,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Respuestascorrectas entity.
     *
     */
    public function deleteAction(Request $request, Respuestascorrectas $respuestascorrectas)
    {
        $form = $this->createDeleteForm($respuestascorrectas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($respuestascorrectas);
            $em->flush();
        }

        return $this->redirectToRoute('respuestascorrectas_index');
    }

    /**
     * Creates a form to delete a Respuestascorrectas entity.
     *
     * @param Respuestascorrectas $respuestascorrectas The Respuestascorrectas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Respuestascorrectas $respuestascorrectas)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respuestascorrectas_delete', array('id' => $respuestascorrectas->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
