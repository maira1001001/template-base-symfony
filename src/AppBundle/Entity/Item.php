<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="items")
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="quantity", type="integer", nullable=false, options={"default":1})
     */
    protected $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="Cash", inversedBy="items")
     * @ORM\JoinColumn(name="cash_item_id", referencedColumnName="id")
     * @Assert\NotBlank(message="Debe seleccionar una venta.")
     */
    private $cash;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="product_items")
     * @ORM\JoinColumn(name="product_item_id", referencedColumnName="id")
     * @Assert\NotBlank(message="Debe seleccionar un producto.")
     */
    private $product;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param string $name
     * @return User
     */
    public function setQuantity($quantity){
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity(){
        return $this->quantity;
    }

    /**
     * Set Product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return product
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get Product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }


    /**
     * Set Cash
     *
     * @param \AppBundle\Entity\Cash $cash
     *
     * @return cash
     */
    public function setCash(\AppBundle\Entity\Cash $cash = null)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get Cash
     *
     * @return \AppBundle\Entity\Cash
     */
    public function getCash()
    {
        return $this->cash;
    }

}