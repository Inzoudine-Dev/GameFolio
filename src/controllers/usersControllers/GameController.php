<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

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
            $data["title"] = "Games";/*determine le titre de la page*/
            $data['script']='<script type="text/javascript" src=/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js> </script>';
            parent::render("Game", $data);
        }
    }


    #[Route('/GameFolio/users/home/games/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

}