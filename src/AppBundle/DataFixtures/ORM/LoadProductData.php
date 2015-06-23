<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;


class LoadProductData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$product1 = new Product();
		$product1->setName('Flying Slipper');
		$product1->setPrice(12.30);
		$product1->setCategory('shoes');
		$product1->setCurrency('gbp');

		$product2 = new Product();
		$product2->setName('Magic Wand');
		$product2->setPrice(34.50);
		$product2->setCategory('magic');
		$product2->setCurrency('gbp');

		$product3 = new Product();
		$product3->setName('Flying Saucer');
		$product3->setPrice(100.50);
		$product3->setCategory('extra');
		$product3->setCurrency('gbp');

		$manager->persist($product1);
		$manager->persist($product2);
		$manager->persist($product3);

		$manager->flush();
	}
}