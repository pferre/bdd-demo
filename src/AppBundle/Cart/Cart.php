<?php

namespace AppBundle\Cart;

use AppBundle\Entity\Product;

class Cart
{

    public function add(Product $product)
    {
        return [$product];
    }
}
