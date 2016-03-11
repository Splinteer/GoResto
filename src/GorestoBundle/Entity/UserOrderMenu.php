<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserOrderMenu
 */
class UserOrderMenu
{
    /**
     * @var integer
     */
    private $userOrderId;

    /**
     * @var integer
     */
    private $menuId;

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
     * @return UserOrderMenu
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
     * Set menuId
     *
     * @param integer $menuId
     * @return UserOrderMenu
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     * @return UserOrderMenu
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
     * @return UserOrderMenu
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
     * @return UserOrderMenu
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
