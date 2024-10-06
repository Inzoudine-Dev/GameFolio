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
        $Data=$ManagerClient->SelectAll();
        $Data["title"]="Home";/*determine le titre de la page*/
        parent::render("Home", $Data);
    }


    #[Route('/GameFolio/home/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

}