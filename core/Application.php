<?php

namespace app\core;
/**
 * Class Application
 *
 * @author Matias Borrazas <borrazas.trabajo@gmail.com>
 * @package app\core
 */

class Application
{
    public static $ROOT_DIR;
    public $router;
    public $request;
    public $response;
    public $db;
    public $session;
    public static $app;
    public $controller;
    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    public function run()
    {
       echo $this->router->resolve();
    }

    public function getController(){
        return $this->controller;
    }

    public function setController($controller){
        $this->controller = $controller;
    }
}