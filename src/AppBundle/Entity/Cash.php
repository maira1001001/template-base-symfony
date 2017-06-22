<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cash
 *
 * @ORM\Entity
 * @ORM\Table(name="cashes")
 */
class Cash
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="datetime", type="integer", nullable=false)
     */
    protected $datetime;

    /**
     * @ORM\ManyToOne(targetEntity="Ingress", inversedBy="ingress_cashes")
     * @ORM\JoinColumn(name="Ingress_cash_id", referencedColumnName="id")
     */
    private $ingress;

    /**
     * @ORM\OneToMany(targetEntity="Item", mappedBy="cash")
     */
    private $items;

    /**
     * @ORM\ManyToOne(targetEntity="Egress", inversedBy="egress_cashes")
     * @ORM\JoinColumn(name="Egress_cash_id", referencedColumnName="id")
     */
    private $egress;

    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="provider_cashes")
     * @ORM\JoinColumn(name="Provider_cash_id", referencedColumnName="id")
     */
    private $provider;

    /**
     * @ORM\Column(name="payment_type", type="string", nullable=false, options={"default":"cash"})
     */
    protected $paymentType;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $comments;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"default":"0"})
     */
    protected $ammount;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="vendor_cashes")
     * @ORM\JoinColumn(name="Vendor_cash_id", referencedColumnName="id")
     */
    private $vendor;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     * @return integer
     */
    public function setDatetime($datetime){
        $this->datetime = $datetime;
        return $this;
    }
    /**
     * Get datetime
     *
     * @return integer
     */
    public function getDatetime(){
        return $this->datetime;
    }

    /**
     * Set promised
     *
     * @param string $promised
     * @return integer
     */
    public function setPromised($promised){
        $this->promised = $promised;
        return $this;
    }
    /**
     * Get promised
     *
     * @return integer
     */
    public function getPromised(){
        return $this->promised;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\User $client
     *
     * @return Content
     */
    public function setClient(\AppBundle\Entity\User $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\User
     */
    public function getClient()
    {
        return $this->client;
    }    

    /**
     * Set Ingress
     *
     * @param \AppBundle\Entity\Ingress $ingress
     *
     * @return Cash
     */
    public function setIngress(\AppBundle\Entity\Ingress $ingress = null)
    {
        $this->ingress = $ingress;

        return $this;
    }

    /**
     * Get Ingress
     *
     * @return \AppBundle\Entity\Ingress
     */
    public function getIngress()
    {
        return $this->ingress;
    }   

    /**
     * Set Egress
     *
     * @param \AppBundle\Entity\Egress $egress
     *
     * @return Cash
     */
    public function setEgress(\AppBundle\Entity\Egress $egress = null)
    {
        $this->egress = $egress;

        return $this;
    }

    /**
     * Get Egress
     *
     * @return \AppBundle\Entity\Egress
     */
    public function getEgress()
    {
        return $this->egress;
    }   

    /**
     * Set Provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return Cash
     */
    public function setProvider(\AppBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get Provider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }   

    /**
     * Set Vendor
     *
     * @param \AppBundle\Entity\User $vendor
     *
     * @return Cash
     */
    public function setVendor(\AppBundle\Entity\User $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get Vendor
     *
     * @return \AppBundle\Entity\Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }   

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return string
     */
    public function setPaymentType($paymentType){
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType(){
        return $this->paymentType;
    }        

    /**
     * Set comments
     *
     * @param string $comments
     * @return string
     */
    public function setComments($comments){
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get comments
     *
     * @return string
     */
    public function getcomments(){
        return $this->comments;
    }    

    /**
     * Set ammount
     *
     * @param integer $ammount
     * @return Cash
     */
    public function setAmmount($ammount){
        $this->ammount = $ammount;
        return $this;
    }
    /**
     * Get ammount
     *
     * @return integer
     */
    public function getAmmount(){
        return $this->ammount;
    }    

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }    
}