<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class OffreController extends Controller
{


    #[Route('/GameFolio/users/home/offres', 'GET')]
    public function index()
    {


        $Data["title"]="Offres";/*determine le titre de la page*/
        parent::render("Offre", $Data);
    }
}