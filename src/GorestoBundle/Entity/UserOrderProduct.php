<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOrderProduct
 */
class UserOrderProduct
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
     * @return UserOrderProduct
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
     * @return UserOrderProduct
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
     * Set currencyId
     *
     * @param integer $currencyId
     * @return UserOrderProduct
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
     * @return UserOrderProduct
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
     * @return UserOrderProduct
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
