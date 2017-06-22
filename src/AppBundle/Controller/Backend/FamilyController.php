<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Family;
use AppBundle\Form\FamilyType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Family controller.
 *
 * @Route("/admin/family")
 */
class FamilyController extends Controller
{
    /**
     * Lists all Family entities.
     *
     * @Route("/", name="family_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $families = $em->getRepository('AppBundle:Family')->findAll();

        return $this->render('backend/family/index.html.twig', array(
            'families' => $families,
        ));
    }

    /**
     * Creates a new Family entity.
     *
     * @Route("/new", name="family_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $family = new Family();
        $form = $this->createForm('AppBundle\Form\FamilyType', $family);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($family);
            $em->flush();

            return $this->redirectToRoute('family_show', array('id' => $family->getId()));
        }

        return $this->render('backend/family/new.html.twig', array(
            'family' => $family,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Family entity.
     *
     * @Route("/{id}", name="family_show")
     * @Method("GET")
     */
    public function showAction(Family $family)
    {
        $deleteForm = $this->createDeleteForm($family);

        return $this->render('backend/family/show.html.twig', array(
            'family' => $family,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing Family entity.
     *
     * @Route("/{id}/edit", name="family_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Family $family)
    {
        $deleteForm = $this->createDeleteForm($family);
        $editForm = $this->createForm('AppBundle\Form\FamilyType', $family);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($family);
            $em->flush();

            return $this->redirectToRoute('family_show', array('id' => $family->getId()));
        }

        return $this->render('backend/family/edit.html.twig', array(
            'family' => $family,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Family entity.
     *
     * @Route("/{id}", name="family_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Family $family)
    {
        $form = $this->createDeleteForm($family);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($family);
            $em->flush();
        }

        return $this->redirectToRoute('family_index');
    }

    /**
     * Creates a form to delete a Family entity.
     *
     * @param Family $family The Family entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Family $family)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('family_delete', array('id' => $family->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}