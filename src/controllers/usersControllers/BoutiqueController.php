<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;


class BoutiqueController extends Controller
{

    #[Route('/GameFolio/users/home/boutiques', 'GET')]
    public function index()
    {

        $Data["title"]="Boutiques";/*determine le titre de la page*/
        parent::render("Boutique", $Data);
    }

}