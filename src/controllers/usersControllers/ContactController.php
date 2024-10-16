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

        $Data["title"]="Contacts";/*determine le titre de la page*/
        parent::render("Contact", $Data);
    }

}