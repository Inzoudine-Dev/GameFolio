<?php

namespace Application;

use Config\routes\Router;
//use Maham\GameFolio\controllers\adminControllers\HomeController;
use Maham\GameFolio\controllers\adminControllers\LoginAdminController;
use Maham\GameFolio\controllers\usersControllers\BoutiqueController;
use Maham\GameFolio\controllers\usersControllers\ContactController;
use Maham\GameFolio\controllers\usersControllers\GameController;
//use Maham\GameFolio\controllers\usersControllers\HomeController;
use Maham\GameFolio\controllers\usersControllers\InfoController;
use Maham\GameFolio\controllers\usersControllers\LoginController;
use Maham\GameFolio\controllers\usersControllers\LogoutController;
use Maham\GameFolio\controllers\usersControllers\OffreController;
use Maham\GameFolio\controllers\usersControllers\RegisterController;

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
        /*users routes*/
        $this->router->addControllerRoutes(\Maham\GameFolio\controllers\usersControllers\HomeController::class);
        $this->router->addControllerRoutes(GameController::class);
        $this->router->addControllerRoutes(OffreController::class);
        $this->router->addControllerRoutes(InfoController::class);
        $this->router->addControllerRoutes(BoutiqueController::class);
        $this->router->addControllerRoutes(ContactController::class);
        $this->router->addControllerRoutes(LoginController::class);
        $this->router->addControllerRoutes(LogoutController::class);
        $this->router->addControllerRoutes(RegisterController::class);

        /*administrators routes*/
        $this->router->addControllerRoutes(LoginAdminController::class);
        $this->router->addControllerRoutes(\Maham\GameFolio\controllers\adminControllers\HomeController::class);
    }

    // Exécute l'application
    public function run()
    {
        $this->router->handleRequest();
    }
}