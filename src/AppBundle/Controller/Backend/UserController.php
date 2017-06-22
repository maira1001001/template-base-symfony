<?php

namespace AppBundle\Controller\Backend;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

/**
 * User controller.
 *
 * @Route("/admin/user")
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('backend/user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        
        
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $form = $formFactory->createForm(array('edit_roles' => true));

        if(!$form->isSubmitted()){
            $user->setRoles(array('ROLE_VISITOR'));
        }
        $form->setData($user);

        $form->handleRequest($request);

        $error = null;
        if ($form->isValid()) {

            if ($form['avatar']->getData() AND $error == NULL) {
                $error = $this->get('app.uploader')->imageValidate($form['avatar']->getData());
                if ($error == NULL) {
                    $newAvatarName = $this->get('app.uploader')->imageUpload($form['avatar']->getData(), $this->getParameter('media')['avatar'], array('width' => $this->getParameter('avatar')['width'], 'height' => $this->getParameter('avatar')['height']));
                    $user->setAvatar($newAvatarName);
                }
            }

            if ($error == NULL){
                $em = $this->getDoctrine()->getManager(); 
                $special_role = false;
                if (!$form['roles']->getData()){
                     $user->addRole('ROLE_VISITOR');
                }            

                $userManager->updateUser($user);

                return $this->redirectToRoute('user_show', array('id' => $user->getId()));
                //return $response;
            }
        }


        return $this->render('backend/user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'error' => $error
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('backend/user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if (!$editForm['plainPassword']->getData()){
                //$user->setPassword($oldPassword);
            }else{
                $user->setPassword($editForm['plainPassword']->getData());   
            }            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('backend/user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())){
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($user);
                $em->flush();
            }
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

     /**
     * @Route("/ajax_users", name="ajax_users")
     * @Method("POST")
     */
    public function ajaxUsersAction(){

      $request = Request::createFromGlobals();
      $name = $request->request->get('name');
      $lastname = $request->request->get('lastname');

      $em = $this->getDoctrine()->getManager();
      
      $object = $em->getRepository('AppBundle:User');
      $users = $object->createQueryBuilder('u')
               ->select('u.id', 'u.lastname', 'u.name', 'u.email')
               ->where('u.lastname LIKE :lastname')
               ->orWhere('u.name LIKE :name')
               ->setParameter('name', '%'.$name.'%')
               ->setParameter('lastname', '%'.$lastname.'%')
               ->getQuery();

      $response = array("code" => 100, "success" => true, "data" => $users->getResult());
      return new Response(json_encode($response));
    }

}
