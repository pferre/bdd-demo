<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

	private function getEntityManager()
	{
		return $this->getDoctrine()->getManager();
	}

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/category/products", name="products")
     */
    public function productsAction()
    {
    	$em = $this->getEntityManager();

    	$products = $em->getRepository('AppBundle:Product')->findAll();

    	return $this->render('default/products.html.twig', [
    		'products' => $products
		]);
    }

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function addProductAction(Request $request, $id)
    {
    	$em = $this->getEntityManager();

    	try {
	    	$product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $id]);
		} catch (\EntityNotFoundException $e) {
			return $e->getMessage();
		} 

		$cart = $request->getSession()->get('cart', []);

		array_push($cart, [
			'id' 		=> 	$product->getId(),
			'name'		=>	$product->getName(),
			'price'		=>	$product->getPrice(),
			'category'  =>	$product->getCategory(),
			'currency'	=>	$product->getCurrency()
		]);

		$request->getSession()->set('cart', $cart);
		
		$request->getSession()->getFlashBag()->add('notice', 'Added '.$product->getName().' to cart');

		return $this->redirect($this->generateUrl('products'));
    }

    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function removeProductAction(Request $request, $id)
    {
    	$cart = $request->getSession()->get('cart', []);

    	foreach ($cart as $key => $value) {
    		if ($value['id'] == $id) {
    			unset($cart[$key]);
    		}
    	}

    	$request->getSession()->set('cart', $cart);

		return $this->redirect($this->generateUrl('products'));
    }

    /**
     * @Route("/cart", name="view_cart")
     */
    public function viewCartAction(Request $request)
    {	
    	$session = $request->getSession();
    	$cartValues = $session->get('cart');

        $totalise = $this->get('totalise');
        $totalPriceOfCart = $totalise->execute($cartValues);

    	return $this->render('default/cart.html.twig', [
    		'cart'  => $cartValues,
            'total' => $totalPriceOfCart
		]);
    }

    /**
     * @Route("/cart/clear", name="clear_cart")
     */
    public function clearCartAction(Request $request)
    {
    	$session = $this->get('session');
    	$session->clear();

    	return $this->redirect($this->generateUrl('homepage'));
    }
}
