<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuPromotion
 */
class MenuPromotion
{
    /**
     * @var integer
     */
    private $menuId;

    /**
     * @var integer
     */
    private $promotionId;


    /**
     * Set menuId
     *
     * @param integer $menuId
     * @return MenuPromotion
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
     * Set promotionId
     *
     * @param integer $promotionId
     * @return MenuPromotion
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get promotionId
     *
     * @return integer 
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }
}
