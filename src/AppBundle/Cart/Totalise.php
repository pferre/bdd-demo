<?php

namespace AppBundle\Cart;

class Totalise
{

    public function execute($cart = [])
    {
        $total = 0;

        if (!empty($cart)) {
	        foreach ($cart as $item => $value) {
	            $total += $value['price'];
	        }
        }

        return $total;
    }
}
