<?php

namespace Project\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function mainAction(Request $request)
    {

        $hello = $this->app['main.repository']->sayHello();

        return $this->app['twig']->render('main.html.twig', array(
            'hello' => $hello
        ));
    }
}