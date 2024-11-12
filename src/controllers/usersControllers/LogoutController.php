<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class LogoutController extends Controller
{

    #[Route('/GameFolio/users/home/logout', 'GET')]
    public function index()
    {

        session_start();

        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
            exit();
        }else{

            session_destroy();
            $data=[
                "title "=> htmlspecialchars("Login", ENT_QUOTES, 'UTF-8'),
                'goodBayMessage'=>'Merci pour votre connexion et A bientot!!',
                'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
            ];

            parent::render('views/users/viewLogin.php',$data);

        }

    }

}