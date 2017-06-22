<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    protected $price;

    /**
     * @ORM\Column(name="cost", type="integer", nullable=false)
     */
    protected $cost;

    /**
     * @ORM\Column(name="codebar", type="integer", nullable=false)
     */
    protected $codebar;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true, options={"default":1})
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity="Family", inversedBy="family_product")
     * @ORM\JoinColumn(name="Family_product_id", referencedColumnName="id")
     */
    private $family;

    /**
     * @ORM\Column(name="path", type="string")
     */
    protected $path;

    /**
     * One Product has Many Item.
     * @ORM\OneToMany(targetEntity="Item", mappedBy="product")
     */
    protected $product_items;

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
     * @return Product
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

    /**
     * Set Stock
     *
     * @param string $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get Stock
     *
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set Price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get Price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Cost
     *
     * @param string $cost
     *
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get Cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set Codebar
     *
     * @param string $codebar
     *
     * @return Product
     */
    public function setCodebar($codebar)
    {
        $this->codebar = $codebar;

        return $this;
    }

    /**
     * Get Codebar
     *
     * @return string
     */
    public function getCodebar()
    {
        return $this->codebar;
    }

    /**
     * Set Family
     *
     * @param \AppBundle\Entity\Family $family
     *
     * @return Product
     */
    public function setFamily(\AppBundle\Entity\Family $family = null)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get Family
     *
     * @return \AppBundle\Entity\Family
     */
    public function getFamily()
    {
        return $this->family;
    }   

    /**
     * Set path
     *
     * @param string $path
     * @return File
     */
    public function setPath($path){
        $this->path = $path;
        return $this;
    }
    /**
     * Get path
     *
     * @return string
     */
    public function getPath(){
        return $this->path;
    }
    
    public function __toString(){
      return $this->getName();
    }   
}
