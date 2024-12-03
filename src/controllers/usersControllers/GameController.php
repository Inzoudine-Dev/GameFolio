<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerImplements\ManagerGameImplement;

class GameController extends Controller
{
    #[Route('/GameFolio/users/home/games', 'GET')]
    public function index()
    {
        /*si l'utilisateur est connecter ok, sinon il est rediriger vers la page login*/
        session_start();
        if(!isset($_SESSION['statut'],$_SESSION['email'],$_SESSION['password'])){
            header('Location:/GameFolio/users/home/login');
            exit();
        }else{
            $data = [
                'title' => 'Games',
                'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                'email' => $_SESSION["email"]
                ];
            parent::render("views/users/viewGame.php", $data);
        }
    }


    #[Route('/GameFolio/users/home/games/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }


    #[Route('/GameFolio/users/home/games/{nomJeu}', 'GET')]
    public function showGame(string $nomJeu)
    {

        $data = [
            'title' => $nomJeu,
            'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
            'datasGame' => (new ManagerGameImplement())->getGameByName($nomJeu),
        ];

        parent::render("views/users/viewDetailsGame.php", $data);

    }
}