<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;
use Maham\GameFolio\managers\ManagerJeu;
use Maham\GameFolio\managers\ManagerOffre;

class HomeController extends Controller
{

    #[Route('/GameFolio/home', 'GET')]
    public function index()
    {

        $ManagerClient=new ManagerClient();
        $ManagerOffre=new ManagerOffre();
        $ManagerJeu=new ManagerJeu();

        $Data1=$ManagerClient->SelectAll();
        $Data2=$ManagerOffre->SelectAll();
        $Data3=$ManagerJeu->SelectAll();

        $Data=$Data1+$Data2+$Data3;

        $Data["title"]="Home";/*determine le titre de la page*/

        parent::render("Home", $Data);
    }


    #[Route('/GameFolio/home/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

}