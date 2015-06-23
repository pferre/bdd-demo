<?php

use Symfony\Component\HttpKernel\KernelInterface;

use Behat\Behat\Context\Context;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\BehatContext;
use Behat\CommonContexts\SymfonyDoctrineContext;

use Traits\DatabaseTransactions;

class BaseContext extends MinkContext implements Context, KernelAwareContext
{
    /**
     * @var Symfony\Component\HttpKernel\KernelInterface
     */
    private $kernel;


    use DatabaseTransactions;


    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }


    public function getEntityManager()
    {
        return $this->kernel->getContainer()
                    ->get('doctrine')
                    ->getManager();
    }


    /**
     * @var $entities | array
     */
    protected function persist($entities = [])
    {
        $em  = $this->getEntityManager();

        foreach ($entities as $entity) {
            $em->persist($entity);
        }

        $em->flush();
    }
}