<?php

namespace Maham\GameFolio\controllers\adminControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class LoginAdminController extends Controller
{

    #[Route('/GameFolio/administrators/login', 'GET')]
    public function index()
    {

        /*destruction de la session de connection aprés deconnection*/
        session_start();
        session_destroy();


        $Data["title"]="Login-Admin";
        $Data["statut"]="deconecter";

        parent::renderAmdin("AdminLogin", $Data);
    }

    #[Route('/GameFolio/administrators/login/', 'GET')]
    public function indexRedirect()
    {

        $this->index();
    }


    #[Route('/GameFolio/administrators/login', 'POST')]
    public function login()
    {

        //$ManagerClient=new ManagerClient();

        if($this->isValid($_POST["email"],$_POST["password"])==false){
            $Data["msg"]='Email ou mot de passe incorrecte!!';
            $Data["title"]="Login-Admin";
            $Data["statut"]="deconecter";
            parent::renderAmdin("AdminLogin",  $Data);
        }

        else{
            session_start();
            $_SESSION['statut']="connecter";
            $_SESSION['email']=$_POST["email"];
            $_SESSION['password']=$_POST["password"];
            header('Location:/GameFolio/administrators/login/home');/*a modifier*/
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