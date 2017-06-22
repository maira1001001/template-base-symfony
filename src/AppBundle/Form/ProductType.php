<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('family', null, array('label' => "Familia", 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('name', null, array('label' => "Nombre", 'attr' => array('class' => 'form-control')))
            ->add('price', null, array('label' => "Precio", 'attr' => array('class' => 'form-control')))
            ->add('stock', null, array('label' => "Stock", 'attr' => array('class' => 'form-control')))
            ->add('cost', null, array('label' => "Costo", 'attr' => array('class' => 'form-control')))
            ->add('codebar', null, array('label' => "Codigo de barras", 'attr' => array('class' => 'form-control')))
            ->add('path', FileType::class, array('label' => 'Archivo', 'mapped' => false, 'required' => true))            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }
}
