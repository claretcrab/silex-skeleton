<?php

namespace Project\Tests\Controller;

use Silex\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    /**
     * @return mixed
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../../../../src/app.php';
        require __DIR__.'/../../../../config/prod.php';
        require __DIR__.'/../../../../src/controllers.php';
        $app['debug'] = true;
        //unset($app['exception_handler']);
        $app['session.test'] = true;

        return $app;
    }

    /**
     * Tests all valid routes.
     */
    public function test200()
    {
        $client = $this->createClient();
        $client->request('GET', '/');
    }

    /**
     * Tests an invalid route.
     */
    public function test404()
    {
        $client = $this->createClient();
        $client->request('GET', '/fake-route');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}