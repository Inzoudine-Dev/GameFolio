<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class InfoController extends Controller
{
    #[Route('/GameFolio/users/home/infos', 'GET')]
    public function index()
    {

        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
        } else {
            $data = [
                'title' => 'Infos',
                'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js'
            ];
            parent::render("views/users/viewInfo.php", $data);
        }
    }
}