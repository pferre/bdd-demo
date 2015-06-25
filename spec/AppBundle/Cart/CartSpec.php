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
    	$this->addItem($product);

    	$this->getCart()->shouldHaveCount(1);
    }

    function it_adds_multiple_items_to_the_cart()
    {
    	$product1 = new Product();
    	$product2 = new Product();

    	$this->addItem($product1);
    	$this->addItem($product2);

    	$this->getCart()->shouldHaveCount(2);
    }


}
