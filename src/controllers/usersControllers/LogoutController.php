<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class LogoutController extends Controller
{

    #[Route('/GameFolio/users/home/logout', 'GET')]
    public function index()
    {

        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            $data['title']='Logout error';
            $data['errorLogout']='Route non accéssible!! connecter vous!';
            parent::render("ErrorLogout", $data);
        }else{
            session_destroy();
            header('Location:/GameFolio/users/home');
        }
    }

}