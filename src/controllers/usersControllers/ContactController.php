<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class ContactController extends  Controller
{

    #[Route('/GameFolio/users/home/contacts', 'GET')]
    public function index()
    {

        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
        }else{
            $data = [
                'title' => 'Contacts',
                'scriptConnexion' => '/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js',
            ];
            parent::render("Contact", $data);
        }
    }

}