<?php


namespace Core;


class Router
{
    private string $uri;
    private array $routes;

    public function __construct()
    {
        $this->uri = $this->getUri();
        $this->routes = include ROOT . '/Application/config/routes.php';
    }

    public function run()
    {
        return $this->routes;
    }
    /**
     * Returns request string
     * @return string
     */
    private function getUri() : string
    {
        return trim($_SERVER['REQUEST_URI'], DIRECTORY_SEPARATOR);
    }
}
