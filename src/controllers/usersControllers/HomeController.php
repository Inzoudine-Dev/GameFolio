<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class HomeController extends Controller
{

    #[Route('/GameFolio/home', 'GET')]
    public function index()
    {

        $ManagerClient=new ManagerClient();
        $ListeClient=$ManagerClient->SelectAll();
        parent::render("Home", $ListeClient);
    }


    #[Route('/GameFolio','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

}