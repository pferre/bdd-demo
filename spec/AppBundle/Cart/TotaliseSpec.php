<?php

namespace spec\AppBundle\Cart;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TotaliseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Cart\Totalise');
    }

    function it_should_totalise_the_cart()
    {

    	$cart = [
    		[
    			'id' => 1,
    			'name' => 'Magic Wand',
    			'price' => 34.50,
    			'category' => 'magic',
    			'currency' => 'gbp' 
    		],
    		[
    			'id' => 2,
    			'name' => 'Flying Slipper',
    			'price' => 12.30,
    			'category' => 'shoes',
    			'currency' => 'gbp' 
    		],
    		[
    			'id' => 3,
    			'name' => 'Flying Saucer',
    			'price' => 	100.50,
    			'category' => 'extra',
    			'currency' => 'gbp' 
    		]
    	];

    	$this->execute($cart)->shouldReturn(147.30);
    }
}
