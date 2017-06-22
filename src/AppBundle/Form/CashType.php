<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use AppBundle\Form\Type\PaymentType;

class CashType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datetime', DateTimeType::class, array(
                'label' => 'Fecha',
                'input'  => 'timestamp',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy HH:mm',
                'disabled' => true, 
                'attr' => array('class' => 'form-control')
            ))
            ->add('ammount', null, array('label' => 'Monto', 'attr' => array('class' => 'form-control')))
            ->add('paymentType', PaymentType::class, array('label' => 'Tipo de pago', 'attr' => array('class' => 'form-control')))
            ->add('comments', null, array('label' => 'Comentarios', 'attr' => array('class' => 'form-control')))
            ->add('ingress', null, array('label' => 'Ingreso', 'attr' => array('class' => 'form-control')))
            ->add('egress', null, array('label' => 'Egreso', 'attr' => array('class' => 'form-control')))
            ->add('provider', null, array('label' => 'Proveedor', 'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cash'
        ));
    }
}
