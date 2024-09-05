<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class HomeController extends Controller
{

    #[Route('/GameFolio/home', 'GET')]
    public function index()
    {
        parent::render("Home", null);
    }

}