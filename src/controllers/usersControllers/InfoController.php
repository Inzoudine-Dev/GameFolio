<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class InfoController extends Controller
{
    #[Route('/GameFolio/users/home/infos', 'GET')]
    public function index()
    {

        $Data["title"]="Infos";/*determine le titre de la page*/
        parent::render("Info", $Data);
    }
}