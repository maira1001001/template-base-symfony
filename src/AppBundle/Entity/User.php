<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Assert\NotBlank(message="Por favor, ingrese un nombre", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="El nombre ingresado es muy corto",
     *     maxMessage="El nombre ingresado es muy largo",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @ORM\Column(name="lastname", type="string", length=255)
     *
     * @Assert\NotBlank(message="Por favor, ingrese un apellido", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="El apellido ingresado es muy corto",
     *     maxMessage="El apellido ingresado es muy largo",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $lastname;

    /**
     * @ORM\Column(name="registered_at", type="integer", nullable=false)
     */
    private $registeredAt;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $avatar;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $adress;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $dni;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $observations;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $gender;

    /**
     * One Vendor has Many Cash.
     * @ORM\OneToMany(targetEntity="Cash", mappedBy="vendor")
     */
    protected $vendor_cashes;

    public function __construct()
    {
        parent::__construct();
        $this->registeredAt = time();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    /**
     * Get name
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastName($lastname){
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastName(){
        return $this->lastname;
    }

    /**
     * Get registeredAt
     *
     * @return string
     */
    public function getRegisteredAt(){
        return $this->registeredAt;
    }

    /**
     * Set registeredAt
     *
     * @param integer $registeredAt
     *
     * @return User
     */
    public function setRegisteredAt($registeredAt)
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar){
        $this->avatar = $avatar;
        return $this;
    }
    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar(){
        if ($this->avatar == null){
            return $this->getGender().'_gender.jpg';
        }else{
            return $this->avatar;
        }
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }
    /**
     * Get gender
     *
     * @return string
     */
    public function getGender(){
        return $this->gender;
    }


    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1(){
        return $this->phone1;
    }

    /**
     * Set phone1
     *
     * @param integer $phone1
     *
     * @return User
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2(){
        return $this->phone2;
    }

    /**
     * Set phone2
     *
     * @param integer $phone2
     *
     * @return User
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }    

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress(){
        return $this->adress;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }    

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni(){
        return $this->dni;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return User
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }      

    /**
     * Get Observations
     *
     * @return string
     */
    public function getObservations(){
        return $this->observations;
    }

    /**
     * Set Observations
     *
     * @param string Observations
     *
     * @return Observations
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }         
}