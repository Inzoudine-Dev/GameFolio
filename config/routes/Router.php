<?php

namespace Config\routes;

use ReflectionClass;

class Router
{
    private array $routes = [];

    // Ajoute les routes du contrôleur à partir des attributs
    public function addControllerRoutes($controllerClass)
    {
        $reflectionClass = new ReflectionClass($controllerClass);

        foreach ($reflectionClass->getMethods() as $method) {
            $attributes = $method->getAttributes(route::class);
            foreach ($attributes as $attribute) {
                $route = $attribute->newInstance();
                $this->routes[] = [
                    'path' => $route->getPath(),
                    'method' => $route->getMethod(),
                    'controller' => $controllerClass,
                    'action' => $method->getName()
                ];
            }
        }
    }

    // Gère la requête en fonction de l'URL et de la méthode HTTP
    public function handleRequest()
    {
        $requestedUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestedMethod = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['path'] === $requestedUri && $route['method'] === $requestedMethod) {
                $controller = new $route['controller']();
                call_user_func([$controller, $route['action']]);
                return;
            }
        }

        // Si aucune route ne correspond, retourner une erreur 404
        http_response_code(404);
        echo "Page non trouvée";
    }
}