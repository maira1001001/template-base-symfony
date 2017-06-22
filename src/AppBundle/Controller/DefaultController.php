<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //$cashes = $em->getRepository('AppBundle:Cash')->findByClient($this->getUser());
        $cashes = null;
        return $this->render('frontend/base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'cashes' => $cashes
        ]);
    }
}
