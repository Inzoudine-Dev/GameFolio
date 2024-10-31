<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class OffreController extends Controller
{


    #[Route('/GameFolio/users/home/offres', 'GET')]
    public function index()
    {

        /*si l'utilisateur est connecter ok, sinon il est rediriger vers la page login*/
        session_start();
        if (!isset($_SESSION['statut'],$_SESSION['email'],$_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
        } else {

            $data = [
                'title' => 'Offres',
                'script' => '/GameFolio/public/scriptsJs/administrators/scriptIconeConnection.js',
            ];
            parent::render("Offre", $data);
        }

    }

    #[Route('/GameFolio/users/home/offres/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }
}