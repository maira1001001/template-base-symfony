<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\Type\RoleType;
use AppBundle\Form\Type\GenderType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
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
            ->add('avatar', FileType::class, array('mapped' => false, 'required' => false, 'attr' => array('class' => 'form-control')))
            ->add('gender', GenderType::class, array(
                'label' => 'Sexo'))
            ->add('username', null, array('label' => 'Nombre de Usuario', 'attr' => array('class' => 'form-control')));
            
        if ($options["edit_roles"]){
            $builder->add('roles', RoleType::class, array('label' => 'Rol', 'required' => false, 'multiple' => true, 'mapped' => true, 'attr' => array('class' => 'form-control')));
            //not require type current password of a User to can Admin edit him...
            $builder->remove('current_password');
            $builder->add('observations', null, array('label' => 'Observaciones', 'attr' => array(
             'placeholder' => 'Opcional...', 'class' => 'form-control')));
            $builder->add('plainPassword', null, array('label' => 'Contraseña', 'attr' => array(
             'value' => substr(md5(rand(0, 1000)), 0, 8), 'class' => 'form-control')));
        }else{
            
        }
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'edit_roles' => false
        ));
    }       
}
?>
