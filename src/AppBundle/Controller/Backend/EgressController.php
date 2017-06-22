<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Egress;
use AppBundle\Form\EgressType;

/**
 * Egress controller.
 *
 * @Route("/admin/egress")
 */
class EgressController extends Controller
{
    /**
     * Lists all Egress entities.
     *
     * @Route("/", name="egress_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $egresses = $em->getRepository('AppBundle:Egress')->findAll();

        return $this->render('backend/egress/index.html.twig', array(
            'egresses' => $egresses,
        ));
    }

    /**
     * Creates a new Egress entity.
     *
     * @Route("/new", name="egress_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $egress = new Egress();
        $form = $this->createForm('AppBundle\Form\EgressType', $egress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($egress);
            $em->flush();

            return $this->redirectToRoute('egress_show', array('id' => $egress->getId()));
        }

        return $this->render('backend/egress/new.html.twig', array(
            'egress' => $egress,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Egress entity.
     *
     * @Route("/{id}", name="egress_show")
     * @Method("GET")
     */
    public function showAction(Egress $egress)
    {
        $deleteForm = $this->createDeleteForm($egress);

        return $this->render('backend/egress/show.html.twig', array(
            'egress' => $egress,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Egress entity.
     *
     * @Route("/{id}/edit", name="egress_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Egress $egress)
    {
        $deleteForm = $this->createDeleteForm($egress);
        $editForm = $this->createForm('AppBundle\Form\EgressType', $egress);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($egress);
            $em->flush();

            return $this->redirectToRoute('egress_show', array('id' => $egress->getId()));
        }

        return $this->render('backend/egress/edit.html.twig', array(
            'egress' => $egress,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Egress entity.
     *
     * @Route("/{id}", name="egress_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Egress $egress)
    {
        $form = $this->createDeleteForm($egress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($egress);
            $em->flush();
        }

        return $this->redirectToRoute('egress_index');
    }

    /**
     * Creates a form to delete a Egress entity.
     *
     * @param Egress $egress The Egress entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Egress $egress)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('egress_delete', array('id' => $egress->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
