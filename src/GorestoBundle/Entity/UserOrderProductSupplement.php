<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOrderProductSupplement
 */
class UserOrderProductSupplement
{
    /**
     * @var integer
     */
    private $userOrderId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $supplementId;

    /**
     * @var integer
     */
    private $currencyId;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $quantity;


    /**
     * Set userOrderId
     *
     * @param integer $userOrderId
     * @return UserOrderProductSupplement
     */
    public function setUserOrderId($userOrderId)
    {
        $this->userOrderId = $userOrderId;

        return $this;
    }

    /**
     * Get userOrderId
     *
     * @return integer 
     */
    public function getUserOrderId()
    {
        return $this->userOrderId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     * @return UserOrderProductSupplement
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set supplementId
     *
     * @param integer $supplementId
     * @return UserOrderProductSupplement
     */
    public function setSupplementId($supplementId)
    {
        $this->supplementId = $supplementId;

        return $this;
    }

    /**
     * Get supplementId
     *
     * @return integer 
     */
    public function getSupplementId()
    {
        return $this->supplementId;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     * @return UserOrderProductSupplement
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return UserOrderProductSupplement
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return UserOrderProductSupplement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
