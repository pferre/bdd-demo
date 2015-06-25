<?php

namespace AppBundle\Cart;

use AppBundle\Entity\Product;


class Cart
{

	protected $cartValues = [];
	
    public function addItem(Product $product)
    {    	
        array_push($this->cartValues, $product);
    }

    public function getCart()
    {
        return $this->cartValues;
    }

}
