<?php
class App {
    protected $controller = 'AuthController';
    protected $method = 'login';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // CONTROLLER
        if (!empty($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            if (file_exists('app/Controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }

        require_once 'app/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // METHOD
        if (!empty($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // PARAMS
        $this->params = !empty($url) ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL() {
        if (!isset($_GET['url']) || $_GET['url'] === '') {
            return [];
        }
        return explode('/', rtrim($_GET['url'], '/'));
    }
}
