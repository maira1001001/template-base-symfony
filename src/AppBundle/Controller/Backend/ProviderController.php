<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Provider;
use AppBundle\Form\ProviderType;

/**
 * Provider controller.
 *
 * @Route("/admin/provider")
 */
class ProviderController extends Controller
{
    /**
     * Lists all Provider entities.
     *
     * @Route("/", name="provider_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $providers = $em->getRepository('AppBundle:Provider')->findAll();

        return $this->render('backend/provider/index.html.twig', array(
            'providers' => $providers,
        ));
    }

    /**
     * Creates a new Provider entity.
     *
     * @Route("/new", name="provider_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $provider = new Provider();
        $form = $this->createForm('AppBundle\Form\ProviderType', $provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($provider);
            $em->flush();

            return $this->redirectToRoute('provider_show', array('id' => $provider->getId()));
        }

        return $this->render('backend/provider/new.html.twig', array(
            'provider' => $provider,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Provider entity.
     *
     * @Route("/{id}", name="provider_show")
     * @Method("GET")
     */
    public function showAction(Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);

        return $this->render('backend/provider/show.html.twig', array(
            'provider' => $provider,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Provider entity.
     *
     * @Route("/{id}/edit", name="provider_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);
        $editForm = $this->createForm('AppBundle\Form\ProviderType', $provider);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($provider);
            $em->flush();

            return $this->redirectToRoute('provider_show', array('id' => $provider->getId()));
        }

        return $this->render('backend/provider/edit.html.twig', array(
            'provider' => $provider,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Provider entity.
     *
     * @Route("/{id}", name="provider_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Provider $provider)
    {
        $form = $this->createDeleteForm($provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($provider);
            $em->flush();
        }

        return $this->redirectToRoute('provider_index');
    }

    /**
     * Creates a form to delete a Provider entity.
     *
     * @param Provider $provider The Provider entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Provider $provider)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('provider_delete', array('id' => $provider->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
