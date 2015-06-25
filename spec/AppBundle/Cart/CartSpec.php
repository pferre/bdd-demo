<?php

namespace spec\AppBundle\Cart;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CartSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Cart\Cart');
    }

    function it_should_add_products_to_the_cart($product)
    {
    	$product->beADoubleOf('AppBundle\Entity\Product');
    	$this->add($product)->shouldReturn([
    		$product
		]);
    }
}
