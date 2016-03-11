<?php

namespace GorestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSupplement
 */
class ProductSupplement
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $supplementId;


    /**
     * Set productId
     *
     * @param integer $productId
     * @return ProductSupplement
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
     * @return ProductSupplement
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
}
