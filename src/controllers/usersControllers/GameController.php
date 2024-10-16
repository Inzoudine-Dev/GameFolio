<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class GameController extends Controller
{
    #[Route('/GameFolio/users/home/games', 'GET')]
    public function index()
    {

        $Data["title"]="Games";/*determine le titre de la page*/
        parent::render("Game", $Data);
    }

}