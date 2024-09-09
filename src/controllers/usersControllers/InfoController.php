<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class InfoController extends Controller
{
    #[Route('/GameFolio/home/infos', 'GET')]
    public function index()
    {

        $ManagerClient=new ManagerClient();
        $ListeClient=$ManagerClient->SelectAll();
        parent::render("Info", $ListeClient);
    }
}