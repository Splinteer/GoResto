<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuProduct
 */
class MenuProduct
{
    /**
     * @var integer
     */
    private $menuId;

    /**
     * @var integer
     */
    private $productId;


    /**
     * Set menuId
     *
     * @param integer $menuId
     * @return MenuProduct
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
     * Set productId
     *
     * @param integer $productId
     * @return MenuProduct
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
}
