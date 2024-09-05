<?php

namespace Application;

use Config\routes\Router;
use Maham\GameFolio\controllers\usersControllers\HomeController;

class Application
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
        $this->registerRoutes();
    }

    // Enregistrement des routes à partir des attributs dans les contrôleurs
    private function registerRoutes()
    {
        $this->router->addControllerRoutes(HomeController::class);
        /*$this->router->addControllerRoutes(CreatController::class);
        $this->router->addControllerRoutes(ConfirmController::class);
        $this->router->addControllerRoutes(RechercheController::class);*/
    }

    // Exécute l'application
    public function run()
    {
        $this->router->handleRequest();
    }
}