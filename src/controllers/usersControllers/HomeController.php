<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerImplements\ManagerGameImplement;
use Maham\GameFolio\managers\ManagerImplements\ManagerOffreImplement;

class HomeController extends Controller
{

    #[Route('/GameFolio/users/home', 'GET')]
    public function index()
    {
            // Créer un tableau de données à passer à la vue getNRaceGamesPrincipal
            $data = [
                'title' => 'Home',
                'offres' => (new ManagerOffreImplement())->getNOffresForHome(3),
                'games' => (new ManagerGameImplement())->getNGamesForHome(8),
            ];

            // Appel de la vue avec les données
            parent::render('home', $data);

    }

    #[Route('/GameFolio/users/home/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }



}