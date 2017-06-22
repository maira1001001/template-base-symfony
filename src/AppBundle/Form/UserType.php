<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use AppBundle\Form\Type\GenderType;
use AppBundle\Form\Type\RoleType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array('label' => 'Nombre', 'attr' => array(
             'placeholder' => 'Ingrese el nombre', 'class' => 'form-control')))
            ->add('lastname', null, array('label' => 'Apellido', 'attr' => array(
             'placeholder' => 'Ingrese el apellido', 'class' => 'form-control')))
            ->add('email', null, array('label' => 'Correo electrónico', 'attr' => array(
             'placeholder' => 'Correo electronico', 'class' => 'form-control')))
            ->add('dni', null, array('label' => 'DNI', 'attr' => array(
             'placeholder' => 'Ingrese el DNI', 'class' => 'form-control')))
            ->add('phone1', null, array('label' => 'Telefono 1', 'attr' => array(
             'placeholder' => 'Ingrese el Telefono 1', 'class' => 'form-control')))
            ->add('phone2', null, array('label' => 'Telefono 2', 'attr' => array(
             'placeholder' => 'Ingrese el Telefono 2', 'class' => 'form-control')))
            ->add('adress', null, array('label' => 'Domicilio', 'attr' => array(
             'placeholder' => 'Ingrese el domicilio', 'class' => 'form-control')))
            ->add('avatar', FileType::class, array('mapped' => false, 'required' => false))
            ->add('gender', GenderType::class, array(
                'label' => 'Sexo', 'attr' => array('class' => 'form-control')))
            ->add('observations', null, array('label' => 'Observaciones', 'attr' => array(
             'placeholder' => 'Opcional...', 'class' => 'form-control')))
            ->add('username', null, array('label' => 'Nombre de Usuario', 'attr' => array('class' => 'form-control')))
            ->add('roles', RoleType::class, array('label' => 'Rol', 'required' => false, 'multiple' => true, 'mapped' => true, 'attr' => array('class' => 'form-control')))
            ->add('plainPassword', null, array('label' => 'Contraseña (en blanco = no edita)', 'required' => false, 'attr' => array('class' => 'form-control')));
            $builder->remove('current_password', null, array('attr' => array('class' => 'form-control')));
    }
    
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
}
