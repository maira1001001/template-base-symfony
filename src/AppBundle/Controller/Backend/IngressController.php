<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ingress;
use AppBundle\Form\IngressType;

/**
 * Ingress controller.
 *
 * @Route("/admin/ingress")
 */
class IngressController extends Controller
{
    /**
     * Lists all Ingress entities.
     *
     * @Route("/", name="ingress_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ingresses = $em->getRepository('AppBundle:Ingress')->findAll();

        return $this->render('backend/ingress/index.html.twig', array(
            'ingresses' => $ingresses,
        ));
    }

    /**
     * Creates a new Ingress entity.
     *
     * @Route("/new", name="ingress_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ingress = new Ingress();
        $form = $this->createForm('AppBundle\Form\IngressType', $ingress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingress);
            $em->flush();

            return $this->redirectToRoute('ingress_show', array('id' => $ingress->getId()));
        }

        return $this->render('backend/ingress/new.html.twig', array(
            'ingress' => $ingress,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ingress entity.
     *
     * @Route("/{id}", name="ingress_show")
     * @Method("GET")
     */
    public function showAction(Ingress $ingress)
    {
        $deleteForm = $this->createDeleteForm($ingress);

        return $this->render('backend/ingress/show.html.twig', array(
            'ingress' => $ingress,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ingress entity.
     *
     * @Route("/{id}/edit", name="ingress_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ingress $ingress)
    {
        $deleteForm = $this->createDeleteForm($ingress);
        $editForm = $this->createForm('AppBundle\Form\IngressType', $ingress);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingress);
            $em->flush();

            return $this->redirectToRoute('ingress_show', array('id' => $ingress->getId()));
        }

        return $this->render('backend/ingress/edit.html.twig', array(
            'ingress' => $ingress,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ingress entity.
     *
     * @Route("/{id}", name="ingress_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ingress $ingress)
    {
        $form = $this->createDeleteForm($ingress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingress);
            $em->flush();
        }

        return $this->redirectToRoute('ingress_index');
    }

    /**
     * Creates a form to delete a Ingress entity.
     *
     * @param Ingress $ingress The Ingress entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ingress $ingress)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingress_delete', array('id' => $ingress->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
