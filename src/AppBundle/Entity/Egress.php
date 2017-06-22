<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Cash;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Egress
 *
 * @ORM\Table(name="egress_types_sys")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EgressRepository")
 */
class Egress
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    /**
     * One Egress has Many Cash.
     * @ORM\OneToMany(targetEntity="Cash", mappedBy="egress")
     */
    protected $egress_cashes;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ContentEstate
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString(){
      return $this->getName();
    }
}
