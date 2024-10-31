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

            session_start();
            if(!isset($_SESSION['statut'],$_SESSION['email'],$_SESSION['password'])){

                $data = [
                    'title' => 'Home',
                    'messageDeconnexion' => 'Vous etes deconecter, connecter vous inscrivez vous!!',
                    'offres' => (new ManagerOffreImplement())->getNOffresForHome(3),
                    'games' => (new ManagerGameImplement())->getNGamesForHome(8),
                ];

            }else{

                $data = [
                    'title' => 'Home',
                    'messageDeconnexion' => 'Bienvenue, vous etes connecter!!',
                    'script' => '/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js',
                    'offres' => (new ManagerOffreImplement())->getNOffresForHome(3),
                    'games' => (new ManagerGameImplement())->getNGamesForHome(8),
                ];

            }

            // Appel de la vue avec les données
            parent::render('home', $data);

    }

    #[Route('/GameFolio/users/home/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }



}