<?php

namespace Maham\GameFolio\controllers\adminControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class HomeController extends Controller
{

    #[Route('/GameFolio/administrators/login/home', 'GET')]
    public function index()
    {

        session_start();
        if(!isset($_SESSION['statut']) || !isset($_SESSION['email']) || !isset($_SESSION['password'])){
            //echo "accés non autorisé !!!";
            $Data["title"]="Home-Admin";
            $Data['scriptDconecter']="'/GameFolio/public/scriptsJs/users/scriptDeconecter.js";

            parent::render("views/administrators/viewHomeAdmin.php", $Data);

        }else{

        $Data["title"]="Home-Admin";

        $Data['scriptConecter']="'/GameFolio/public/scriptsJs/users/scriptConecter.js";

        parent::render("views/administrators/viewHomeAdmin.php", $Data);
        }

    }

    #[Route('/GameFolio/administrators/login/home/', 'GET')]
    public function indexRedirect()
    {

        $this->index();
    }

}