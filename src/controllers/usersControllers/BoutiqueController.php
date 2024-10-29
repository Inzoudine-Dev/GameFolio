<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;


class BoutiqueController extends Controller
{

    #[Route('/GameFolio/users/home/boutiques', 'GET')]
    public function index()
    {

        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
        } else {
            $Data["title"] = "Boutiques";/*determine le titre de la page*/
            $Data['script']='<script type="text/javascript" src=/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js> </script>';
            parent::render("Boutique", $Data);
        }
    }

}