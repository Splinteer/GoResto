<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPromotion
 */
class ProductPromotion
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $promotionId;


    /**
     * Set productId
     *
     * @param integer $productId
     * @return ProductPromotion
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
     * Set promotionId
     *
     * @param integer $promotionId
     * @return ProductPromotion
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
