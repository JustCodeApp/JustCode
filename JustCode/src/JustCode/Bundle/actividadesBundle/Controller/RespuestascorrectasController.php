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
        $respuestascorrecta = new Respuestascorrectas();
        $form = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType', $respuestascorrecta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestascorrecta);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_show', array('id' => $respuestascorrecta->getId()));
        }

        return $this->render('respuestascorrectas/new.html.twig', array(
            'respuestascorrecta' => $respuestascorrecta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Respuestascorrectas entity.
     *
     */
    public function showAction(Respuestascorrectas $respuestascorrecta)
    {
        $deleteForm = $this->createDeleteForm($respuestascorrecta);

        return $this->render('respuestascorrectas/show.html.twig', array(
            'respuestascorrecta' => $respuestascorrecta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Respuestascorrectas entity.
     *
     */
    public function editAction(Request $request, Respuestascorrectas $respuestascorrecta)
    {
        $deleteForm = $this->createDeleteForm($respuestascorrecta);
        $editForm = $this->createForm('JustCode\Bundle\actividadesBundle\Form\RespuestascorrectasType', $respuestascorrecta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($respuestascorrecta);
            $em->flush();

            return $this->redirectToRoute('respuestascorrectas_edit', array('id' => $respuestascorrecta->getId()));
        }

        return $this->render('respuestascorrectas/edit.html.twig', array(
            'respuestascorrecta' => $respuestascorrecta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Respuestascorrectas entity.
     *
     */
    public function deleteAction(Request $request, Respuestascorrectas $respuestascorrecta)
    {
        $form = $this->createDeleteForm($respuestascorrecta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($respuestascorrecta);
            $em->flush();
        }

        return $this->redirectToRoute('respuestascorrectas_index');
    }

    /**
     * Creates a form to delete a Respuestascorrectas entity.
     *
     * @param Respuestascorrectas $respuestascorrecta The Respuestascorrectas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Respuestascorrectas $respuestascorrecta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('respuestascorrectas_delete', array('id' => $respuestascorrecta->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
