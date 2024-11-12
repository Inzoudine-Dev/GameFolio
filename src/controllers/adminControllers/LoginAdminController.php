<?php

namespace Maham\GameFolio\controllers\adminControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerImplements\ManagerClientImplement;

class LoginAdminController extends Controller
{

    #[Route('/GameFolio/administrators/login', 'GET')]
    public function index()
    {


        $data=[
            "title"=>"Login-Admin",
        ];

        parent::render("views/administrators/viewAdminLogin.php", $data);
    }

    #[Route('/GameFolio/administrators/login/', 'GET')]
    public function indexRedirect()
    {

        $this->index();
    }


    #[Route('/GameFolio/administrators/login', 'POST')]
    public function login()
    {
        //logique connexion coté administrators
    }

    public function isValid(string $email, string $password): bool {
        // 1. Validation de l'email
        $email = trim($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;

        }

        // Protection contre XSS si l'email est affiché dans une page HTML
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // 2. Validation du mot de passe (sans htmlspecialchars)
        $password = trim($password);

        if (strlen($password) < 16) {
            return false;

        }

        if (!preg_match('/[A-Z]/', $password) ||
            !preg_match('/[a-z]/', $password) ||
            !preg_match('/[0-9]/', $password) ||
            !preg_match('/[\W]/', $password)) {
            return false;

        }

        return true;
    }

}