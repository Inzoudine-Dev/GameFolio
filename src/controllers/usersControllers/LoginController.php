<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerImplements\ManagerClientImplement;


class LoginController extends Controller
{

    #[Route('/GameFolio/users/home/login', 'GET')]
    public function index()
    {

        $data=[
            'title'=>"Login",
            'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
        ];
        parent::render("Login", $data);
    }

    #[Route('/GameFolio/users/home/login/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

    #[Route('/GameFolio/users/home/login', 'POST')]
    public function login()
    {

        if (($this->isValid($_POST["email"], $_POST["password"]) == false)) {

            $data=[
                'title'=>"Login",
                'errorMessage'=>"format mot de passe incorecte!!",
                'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
            ];

            parent::render("Login", $data);

        } else {

            if (((new ManagerClientImplement())->getPasswordByEmail($_POST["email"]))!="email ou mot de passe inconnue !!") {

                    if (!(password_verify($_POST["password"], ((new ManagerClientImplement())->getPasswordByEmail($_POST["email"]))))){
                        $data=[
                        'errorMessage'=>"Mot de passe incorrect !!",
                        'title'=>"Login",
                        'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
                    ];

                    parent::render("Login", $data);


                } else {

                    session_start();
                    $_SESSION['statut'] = "connecter";
                    $_SESSION['email'] = $_POST["email"];
                    $_SESSION['password'] = $_POST["password"];
                    header('Location:/GameFolio/users/home');
                    exit();

                }
            }else{

                $data=[
                    'title'=>"Login",
                    'errorMessage'=>"Email inconnue!!",
                    'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
                ];

                parent::render("Login", $data);

            }

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