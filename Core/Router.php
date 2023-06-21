<?php

namespace Core;

use Exception;

class Router
{
    private ?string $uri;
    private ?array $routes;
    private Registry $registry;
    private ?Request $request;

    public function __construct()
    {
        $this->registry = Registry::getInstance();
        $this->request = $this->registry->getRequest();
        $this->uri = $this->request->getUri();
        $this->routes = $this->registry->getProp('routes');
    }

    public function getTrack() : array
    {
        foreach ($this->routes as $route => $path) {
            $pattern = $this->createPattern($route);
            if (preg_match($pattern, $this->uri, $matches)) {
                $track = explode("/", $path);
                return [
                'controller' => $track[0],
                'action' => $track[1],
                'params' => $this->cleanParams($matches)
                ];
            }
        }
        return [
            'controller' => 'Error',
            'action' => "notFound",
            'params' => ''
        ];
    }

    public function dispatcher(array $track): void
    {
        $controllerName = ucfirst($track['controller']) . 'Controller';
        $actionName = 'action' . ucfirst($track['action']);
        $params = $track['params'];

        $fullName = '\\Application\\Controller\\' . $controllerName;
        try {
            $controller = new $fullName;
            if (method_exists($controller, $actionName)) {
                $controller->$actionName($params);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function createPattern($path) : string
    {
        return '#^' . preg_replace('#/(<[^/]+>):?([^/]+)?#', '/(?$1$2+)', $path) . '/?$#';
    }

    private function cleanParams($params) : array
    {
        $result = [];
        foreach ($params as $key => $param) {
            if (!is_int($key)) {
                $result[$key] = $param;
            }
        }
        return $result;
    }
}
