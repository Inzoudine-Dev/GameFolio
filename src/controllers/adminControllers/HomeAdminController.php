<?php

namespace Maham\GameFolio\controllers\adminControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class HomeAdminController extends Controller
{

    #[Route('/GameFolio/administrators/login/home', 'GET')]
    public function index()
    {

        session_start();
        if(!isset($_SESSION['statut']) || !isset($_SESSION['email']) || !isset($_SESSION['password'])){
            echo "accés non autorisé !!!";
        }else{

        $Data["title"]="Home-Admin";

        $Data["scriptIcone_Connection"]="/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js";

        parent::renderAmdin("HomeAdmin", $Data);
        }

    }

    #[Route('/GameFolio/administrators/login/home/', 'GET')]
    public function indexRedirect()
    {

        $this->index();
    }

}