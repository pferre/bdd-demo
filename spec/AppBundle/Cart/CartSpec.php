<?php

namespace spec\AppBundle\Cart;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use AppBundle\Entity\Product;


class CartSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Cart\Cart');
    }

    function it_adds_an_item_to_cart(Product $product)
    {
    	$this->addItem($product, $amount = 1);

    	$this->getCart()->shouldHaveCount(1);
    }

}
