<?php

namespace AppBundle\Controller\Backend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Cash;
use AppBundle\Form\CashType;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Item;

/**
 * Cash controller.
 *
 * @Route("/admin/cash")
 */
class CashController extends Controller
{
    /**
     * Lists all Cash entities.
     *
     * @Route("/", name="cash_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $request = Request::createFromGlobals();

        $ingressType = $em->getRepository('AppBundle:Ingress')->findAll();

        $egressType = $em->getRepository('AppBundle:Egress')->findAll();
        
        $paymentType = array(array('id' => 'Efectivo', 'name' => 'Efectivo'), array('id' => 'Tarjeta', 'name' => 'Tarjeta'), array('id' => 'Cheque', 'name' => 'Cheque'));

        if ($request->request->get('startTime')){  
            $startTime = strtotime(str_replace('/', '-', $request->request->get('startTime')));
        }else{
            $startTime = mktime(0, 0, 0, date("m", time()), date("d", time()), date("Y", time()));   
        }
        
        if ($request->request->get('endTime')){
            $endTime = strtotime(str_replace('/', '-', $request->request->get('endTime'))); 
        }else{
            $endTime = time();
        }


        $cashes = $em->getRepository('AppBundle:Cash')->createQueryBuilder('c')
                            ->where('c.datetime > :startTime')
                            ->andWhere('c.datetime < :endTime')
                            ->setParameter('startTime', $startTime)
                            ->setParameter('endTime', $endTime)
                            ->getQuery()
                            ->getResult();

        $cashesFiltered = array();

        foreach ($cashes as $k => $v) {
            $pass = true;
            if ($request->request->get('ingressType')){
                if ($v->getIngress()){
                    if ($request->request->get('ingressType') != $v->getIngress()->getId()){
                        $pass = false;
                        echo $request->request->get('ingressType');exit();
                    }
                }else{
                    $pass = false;
                }
            }

            if ($request->request->get('egressType')){
                if ($v->getEgress()){
                    if ($request->request->get('egressType') != $v->getEgress()->getId()){
                        $pass = false;
                    }
                }else{
                    $pass = false;
                }
            }

            if ($request->request->get('paymentType')){
                if ($request->request->get('paymentType') != $v->getPaymentType()){//->getId()
                    $pass = false;
                }
            }            
            
            if ($pass){
                $cashesFiltered[] = $v;     
            }
        }

        return $this->render('backend/cash/index.html.twig', array(
            'cashes' => $cashesFiltered,
            'startTime' => date("d/m/Y H:i", $startTime),
            'endTime' => date("d/m/Y H:i", $endTime),
            'ingressType' => $ingressType,
            'egressType' => $egressType,
            'paymentType' => $paymentType
        ));
    }

    /**
     * Creates a new Cash entity.
     *
     * @Route("/new/{type}", name="cash_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $type)
    {
        $cash = new Cash();
        $cash->setVendor($this->getUser());
        $cash->setDatetime(time());
        $form = $this->createForm('AppBundle\Form\CashType', $cash);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cash);
            $em->flush();

            return $this->redirectToRoute('cash_show', array('id' => $cash->getId()));
        }

        return $this->render('backend/cash/new.html.twig', array(
            'cash' => $cash,
            'form' => $form->createView(),
            'type' => $type
        ));
    }

    /**
     * Finds and displays a Cash entity.
     *
     * @Route("/{id}", name="cash_show")
     * @Method("GET")
     */
    public function showAction(Cash $cash)
    {
        $request = Request::createFromGlobals();

        if ($request->query->get('clone')){
            $newCash = new Cash();
            $newCash->setDatetime(time());
            $newCash->setPaymentType($cash->getPaymentType());
            $newCash->setComments($cash->getComments());
            $newCash->setIngress($cash->getIngress());
            $newCash->setEgress($cash->getEgress());
            $newCash->setProvider($cash->getProvider());
            $newCash->setAmmount($cash->getAmmount());
            $newCash->setVendor($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($newCash);
            $em->flush();
            
            $cash = $newCash;
        }

        $deleteForm = $this->createDeleteForm($cash);

        $fullscreen = $request->query->get('fullscreen');

        return $this->render('backend/cash/show.html.twig', array(
            'cash' => $cash,
            'delete_form' => $deleteForm->createView(),
            'fullscreen' => $fullscreen
        ));
    }

    /**
     * Product Quantity
     *
     * @Route("/{id}/productquantity", name="product_quantity")
     * @Method("POST")
     */
    public function productQuantityAction(Cash $cash)
    {
        $request = Request::createFromGlobals();
        
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle:Item')->findOneById($request->request->get('item'));
        $item->setQuantity($request->request->get('quantity'));

        $em->persist($item);
        $em->flush();

        $response = array("code" => 100, "success" => true);
        return new Response(json_encode($response));
    }

    /**
     * Product Add
     *
     * @Route("/{id}/productadd", name="product_add")
     * @Method("POST")
     */
    public function productAddAction(Cash $cash)
    {
        $request = Request::createFromGlobals();
        
        $item = new Item();

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->findOneById($request->request->get('product'));

        $item->setCash($cash);
        $item->setProduct($product);
        $item->setQuantity(1);
        $em->persist($item);
        $em->flush();

        $response = array("code" => 100, "success" => true);
        return new Response(json_encode($response));
    }

    /**
     * Product Remove and redirect to show
     *
     * @Route("/{id}/productremove/{product}", name="product_remove")
     * @Method("GET")
     */
    public function productRemoveAction(Cash $cash, Item $product)
    {
        if ($cash->getVendor()->getId() == $this->getUser()->getId() OR in_array('ROLE_ADMIN', $this->getUser()->getRoles())){
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->showAction($cash);
    }

    /**
     * Finds and displays a Cash entity.
     *
     * @Route("/print/{id}", name="cash_print")
     * @Method("GET")
     */
    public function printAction(Cash $cash)
    {
        return $this->render('backend/cash/print.html.twig', array(
            'cash' => $cash
        ));
    }

    /**
     * Displays a form to edit an existing Cash entity.
     *
     * @Route("/{id}/edit", name="cash_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cash $cash)
    {
        $deleteForm = $this->createDeleteForm($cash);
        $editForm = $this->createForm('AppBundle\Form\CashType', $cash);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cash);
            $em->flush();

            return $this->redirectToRoute('cash_show', array('id' => $cash->getId()));
        }
        if ($cash->getIngress()){
            $type = 'ingress';
        }else{
            $type = 'egress';
        }
        return $this->render('backend/cash/edit.html.twig', array(
            'cash' => $cash,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'type' => $type
        ));
    }

    /**
     * Deletes a Cash entity.
     *
     * @Route("/{id}", name="cash_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cash $cash)
    {
        $form = $this->createDeleteForm($cash);
        $form->handleRequest($request);

        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())){
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($cash);
                $em->flush();
            }               
        }

        return $this->redirectToRoute('cash_index');
    }

    /**
     * Creates a form to delete a Cash entity.
     *
     * @param Cash $cash The Cash entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cash $cash)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cash_delete', array('id' => $cash->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
