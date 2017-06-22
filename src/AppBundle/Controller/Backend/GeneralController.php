<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\General;
use AppBundle\Form\GeneralType;

/**
 * General controller.
 *
 * @Route("/admin/general")
 */
class GeneralController extends Controller
{
    /**
     * Lists all General entities.
     *
     * @Route("/", name="general_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $generals = $em->getRepository('AppBundle:General')->findAll();

        return $this->render('backend/general/index.html.twig', array(
            'generals' => $generals,
        ));
    }

    /**
     * Finds and displays a General entity.
     *
     * @Route("/{id}", name="general_show")
     * @Method("GET")
     */
    public function showAction(General $general)
    {
        return $this->render('backend/general/show.html.twig', array(
            'general' => $general
        ));
    }

    /**
     * Displays a form to edit an existing General entity.
     *
     * @Route("/{id}/edit", name="general_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, General $general)
    {
        $editForm = $this->createForm('AppBundle\Form\GeneralType', $general);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($general);
            $em->flush();

            return $this->redirectToRoute('general_show', array('id' => $general->getId()));
        }

        return $this->render('backend/general/edit.html.twig', array(
            'general' => $general,
            'edit_form' => $editForm->createView()
        ));
    }

}
