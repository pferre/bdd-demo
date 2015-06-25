<?php

namespace spec\AppBundle\Cart;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use AppBundle\DataFixtures\Traits\CartData;

class TotaliseSpec extends ObjectBehavior
{
	use CartData;

    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Cart\Totalise');
    }

    function it_should_totalise_the_cart()
    {
    	$this->execute($this->cart)->shouldReturn(147.30);
    }
}
