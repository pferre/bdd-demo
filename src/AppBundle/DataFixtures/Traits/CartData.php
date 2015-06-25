<?php

namespace AppBundle\DataFixtures\Traits;


trait CartData
{
    public $cart = [
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
            'price' =>  100.50,
            'category' => 'extra',
            'currency' => 'gbp' 
        ]
    ];
}