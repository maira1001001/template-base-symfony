<?php

namespace AppBundle\Helper;

use Doctrine\ORM\EntityManager;
use App\FrontBundle\Entity\General;

/**
 * General helper.
*/
class GeneralHelper
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getAll() {
        return $this->em->getRepository('AppBundle:General')->findAll();
    }
    
}
