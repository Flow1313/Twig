<?php
namespace App\Core;

use App\Core\Router;
use App\Core\Request;
use App\Core\Session;

class Application
{
    public Router $router;
    public Request $request;
    public Session $session;
    public static Application $app;

    public function __construct()
    {
        self::$app = $this;
        $this->request = new Request();
        $this->session = new Session();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
