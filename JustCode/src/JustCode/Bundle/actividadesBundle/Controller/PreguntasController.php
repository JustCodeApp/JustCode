<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Preguntas;
use JustCode\Bundle\actividadesBundle\Form\PreguntasType;

/**
 * Preguntas controller.
 *
 */
class PreguntasController extends Controller
{
    /**
     * Lists all Preguntas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preguntas = $em->getRepository('JustCodeactividadesBundle:Preguntas')->findAll();

        return $this->render('preguntas/index.html.twig', array(
            'preguntas' => $preguntas,
        ));
    }

    /**
     * Creates a new Preguntas entity.
     *
     */
    public function newAction(Request $request)
    {
        $preguntas = new Preguntas();
        $form = $this->createForm('JustCode\Bundle\actividadesBundle\Form\PreguntasType', $preguntas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preguntas);
            $em->flush();

            return $this->redirectToRoute('preguntas_show', array('id' => $preguntas->getId()));
        }

        return $this->render('preguntas/new.html.twig', array(
            'pregunta' => $preguntas,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Preguntas entity.
     *
     */
    public function showAction(Preguntas $preguntas)
    {
        $deleteForm = $this->createDeleteForm($preguntas);

        return $this->render('preguntas/show.html.twig', array(
            'pregunta' => $preguntas,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Preguntas entity.
     *
     */
    public function editAction(Request $request, Preguntas $preguntas)
    {
        $deleteForm = $this->createDeleteForm($preguntas);
        $editForm = $this->createForm('JustCode\Bundle\actividadesBundle\Form\PreguntasType', $preguntas);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preguntas);
            $em->flush();

            return $this->redirectToRoute('preguntas_edit', array('id' => $preguntas->getId()));
        }

        return $this->render('preguntas/edit.html.twig', array(
            'pregunta' => $preguntas,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Preguntas entity.
     *
     */
    public function deleteAction(Request $request, Preguntas $preguntas)
    {
        $form = $this->createDeleteForm($preguntas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($preguntas);
            $em->flush();
        }

        return $this->redirectToRoute('preguntas_index');
    }

    /**
     * Creates a form to delete a Preguntas entity.
     *
     * @param Preguntas $preguntas The Preguntas entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Preguntas $preguntas)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preguntas_delete', array('id' => $preguntas->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
