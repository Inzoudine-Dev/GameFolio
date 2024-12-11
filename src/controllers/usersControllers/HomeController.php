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
                    'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
                ];

            }else{

                $data = [
                    'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                    'msgConceter' => 'Bienvenue sur votre compte GameFolio!!, vous etes connecter!!',
                    'email' => $_SESSION["email"],
                ];

            }

            $data['title']='Home';
            $data['$scriptSlide']='/GameFolio/public/scriptsJs/users/scriptSlide.js';
            $data['offres']=(new ManagerOffreImplement())->getNOffresForHome(3);
            $data['games']=(new ManagerGameImplement())->getNGamesForHome(8);
            parent::render('views/users/viewHome.php', $data);

    }

    #[Route('/GameFolio/users/home/','GET')]
    public function indexRedirect()
    {
        header('Location:/GameFolio/users/home');
    }

    #[Route('/GameFolio/users/','GET')]
    public function indexRedirectHome()
    {
        header('Location:/GameFolio/users/home');
    }


}