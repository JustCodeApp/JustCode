<?php

namespace JustCode\Bundle\actividadesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JustCode\Bundle\actividadesBundle\Entity\Niveles;
use JustCode\Bundle\actividadesBundle\Form\NivelesType;

/**
 * Niveles controller.
 *
 */
class NivelesController extends Controller
{
    /**
     * Lists all Niveles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $niveles = $em->getRepository('JustCodeactividadesBundle:Niveles')->findAll();
        
        return $this->render('niveles/index.html.twig', array(
            'niveles' => $niveles,
        ));
    }

    /**
     * Creates a new Niveles entity.
     *
     */
    public function newAction(Request $request)
    {
        $nivele = new Niveles();
        $form = $this->createForm('JustCode\Bundle\actividadesBundle\Form\NivelesType', $nivele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nivele);
            $em->flush();

            return $this->redirectToRoute('niveles_show', array('id' => $nivele->getIdniveles()));
        }

        return $this->render('niveles/new.html.twig', array(
            'nivele' => $nivele,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Niveles entity.
     *
     */
    public function showAction(Niveles $nivele)
    {
        $deleteForm = $this->createDeleteForm($nivele);

        return $this->render('niveles/show.html.twig', array(
            'nivele' => $nivele,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Niveles entity.
     *
     */
    public function editAction(Request $request, Niveles $nivele)
    {
        $deleteForm = $this->createDeleteForm($nivele);
        $editForm = $this->createForm('JustCode\Bundle\actividadesBundle\Form\NivelesType', $nivele);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nivele);
            $em->flush();

            return $this->redirectToRoute('niveles_edit', array('id' => $nivele->getIdniveles()));
        }

        return $this->render('niveles/edit.html.twig', array(
            'nivele' => $nivele,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Niveles entity.
     *
     */
    public function deleteAction(Request $request, Niveles $nivele)
    {
        $form = $this->createDeleteForm($nivele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nivele);
            $em->flush();
        }

        return $this->redirectToRoute('niveles_index');
    }

    /**
     * Creates a form to delete a Niveles entity.
     *
     * @param Niveles $nivele The Niveles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Niveles $nivele)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveles_delete', array('id' => $nivele->getIdniveles())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
