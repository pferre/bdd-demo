<?php

use Behat\Behat\Tester\Exception\PendingException;

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Element\NodeElement;

use AppBundle\Entity\Product;

use Traits\PHPUnitAware;

/**
 * Defines application features from the specific context.
 */
class CartContext extends BaseContext implements SnippetAcceptingContext
{

    private $fixtures;

    use PHPUnitAware;

    /**
     * @Given the following products in the database:
     */
    public function theFollowingProductsInTheDatabase(TableNode $table)
    {
        $products = [];

        foreach ($table->getHash() as $productHash) {
            $product = new Product;
            $product->setName($productHash['name']);
            $product->setPrice($productHash['price']);
            $product->setCategory($productHash['category']);
            $product->setCurrency($productHash['currency']);

            $products[] = $product;
        }

        $this->persist($products);

        $this->fixtures = $products;
    }

    /**
     * @When I browse the :uri page
     * @var uri | string
     */
    public function iBrowseThePage($uri)
    {
        $this->visit($uri);
    }

    /**
     * @When I should see all the products
     */
    public function iShouldSeeAllTheProducts()
    {
        $em = $this->getEntityManager();

        $products = $em->getRepository('AppBundle:Product')->findAll();

        PHPUnit_Framework_Assert::assertEquals($this->fixtures, $products);
    }

    /**
     * @When I add product :name to my cart
     * @var name | string
     */
    public function iAddProductToMyCart($name)
    {
        $this->pressButton('add_'.$name);
    }

    /**
     * @Then I should have product :name in my cart
     * @var name | string
     */
    public function iShouldHaveProductInMyCart($name)
    {
        $cart = $this->getItemInSession();

        PHPUnit_Framework_Assert::assertEquals($name, $cart['name']);
    }


    /**
     * @When I remove product :name from my cart
     */
    public function iRemoveProductFromMyCart($name)
    {
        $this->pressButton('remove_'.$name);
    }

    /**
     * @Then my cart should be empty
     */
    public function myCartShouldBeEmpty()
    {
        $cart = $this->getItemInSession();

        PHPUnit_Framework_Assert::assertNull($cart);
    }

    /**
     * @return $cart | array
     */
    private function getItemInSession()
    {
        $driver = $this->getSession()->getDriver();
        $client = $driver->getClient();
        $session = $client->getContainer()->get('session');
        $values = $session->get('cart');

        $cart = $values != null ? array_pop($values) : null;

        return $cart;
    }

    /**
     * @return $cart | array
     */
    private function getItemsInSession()
    {
        $driver = $this->getSession()->getDriver();
        $client = $driver->getClient();
        $session = $client->getContainer()->get('session');
        $values = $session->get('cart');

        $cart = $values != null ? $values : null;

        return $cart;
    }


    /**
     * @Then I should see a message stating that my cart is empty
     */
    public function iShouldSeeAMessageStatingThatMyCartIsEmpty()
    {
        $this->assertPageContainsText('Cart is empty, nothing to see.');
    }


    /**
     * @Then I should have :number products in my cart
     */
    public function iShouldHaveProductsInMyCart($number)
    {
        $cart = $this->getItemsInSession();

        PHPUnit_Framework_Assert::assertCount((int)$number, $cart);
    }

    /**
     * @Then my cart total should be :amount
     */
    public function myCartTotalShouldBe($amount)
    {
        $this->visit('cart');

        $this->assertPageContainsText($amount);
    }

    /**
     * @When I visit :uri
     */
    public function iVisit($uri)
    {
        $this->visit($uri);
    }

    /**
     * @Then I want to see :text
     */
    public function iWantToSee($text)
    {
        $this->assertPageContainsText($text);
    }
}
