<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;

class LoginController extends Controller
{

    #[Route('/GameFolio/home/login', 'GET')]
    public function index()
    {
        parent::render("Login", null);
    }

    #[Route('/GameFolio/home/login', 'POST')]
    public function login()
    {

        $ManagerClient=new ManagerClient();
        $ListeClient=$ManagerClient->SelectAll();
        if($this->isValid($_POST["email"],$_POST["password"])==false){
            //echo"<h1 class='error_login_class'>erreur!!</h1>";
            parent::render("Login",  $donnees=['msg'=>'Email ou mot de passe incorrecte!!']);
        }else{
            header('Location:/GameFolio/home');
        }
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