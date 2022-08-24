<?php


namespace MageGuide\TierPriceOverride\Model\Product\Type;

class Price extends \Magento\Catalog\Model\Product\Type\Price
{
	/**
     * Get base price with apply Group, Tier, Special prises
     *
     * @param Product $product
     * @param float|null $qty
     *
     * @return float
     */
    public function getBasePrice($product, $qty = null)
    {
        $price = (float) $product->getPrice();

        if((float)$this->_applyTierPrice($product, $qty, $price) != $price){
        	if ($qty === null) {
	            $qty = 1;
	        }
        	return $this->_applyTierPrice($product, $qty, $price);
        }else{
        	return $this->_applySpecialPrice($product, $price);
        }
    }
}
