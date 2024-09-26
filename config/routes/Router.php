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
        // Récupérer et décoder l'URI demandée
        $requestedUri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $requestedMethod = $_SERVER['REQUEST_METHOD'];

        // Vérifier si l'URL contient du code malveillant
        if (!$this->isUrlSafe($requestedUri)) {
            http_response_code(400);
            echo "Requête non valide : URL contient du code malveillant.";
            return;
        }

        // Parcourir les routes pour trouver une correspondance
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

    // Vérifie si une URL est sûre (sans code malveillant)
    private function isUrlSafe($url)
    {
        // Désinfecter l'URL avec htmlspecialchars pour éviter le XSS
        $cleanedUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');

        // Si l'URL d'origine n'est pas égale à l'URL nettoyée, elle contient du code malveillant
        return $url === $cleanedUrl;
    }
}