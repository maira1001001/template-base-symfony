<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RoleType extends AbstractType
{
    private $genderChoices;

    public function __construct(array $security)
    {
        $this->securityChoices = array();
        foreach($security['roles_available'] as $role) {
            $this->securityChoices[$role] = $role;
        }
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->securityChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
?>
