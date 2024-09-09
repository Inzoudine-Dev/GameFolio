<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class LoginController extends Controller
{

    #[Route('/GameFolio/home/login', 'GET')]
    public function index()
    {

        $ManagerClient=new ManagerClient();
        $ListeClient=$ManagerClient->SelectAll();
        parent::render("Login", $ListeClient);
    }

}