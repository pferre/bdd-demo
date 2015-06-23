<?php

namespace Traits;

trait DatabaseTransactions
{
    /**
     * @BeforeScenario
     */
    public function beforeScenario()
    {
    	exec('app/console doctrine:database:drop --force --env=test');
    	exec('app/console doctrine:database:create --env=test');
    	exec('app/console doctrine:schema:update --force --env=test');
    }
}