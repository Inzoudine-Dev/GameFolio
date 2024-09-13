<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use DateTime;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerClient;
use Maham\GameFolio\models\objects\Client;


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
        if($this->isValid($_POST["email"],$_POST["password"])==false){
            parent::render("Login",  $donnees=['msg'=>'Email ou mot de passe incorrecte!!']);
        }else{
            $ManagerClient->insert(new Client('1','SAID2','MADI2',new DateTime('1994-04-25 02:00:00'),$_POST['email'],"07129596332",$_POST['password']));
            header('Location:/GameFolio/home');/*a modifier*/
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