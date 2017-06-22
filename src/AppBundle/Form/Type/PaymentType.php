<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PaymentType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Efectivo' => 'Efectivo',
                'Tarjeta' => 'Tarjeta',
                'Cheque' => 'Cheque'
            )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
?>