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

        $test=['toto'=>10,'titi'=>'comment sa va !!'];
        parent::render("Home", $test);
    }

}