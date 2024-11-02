<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\DAOs\DaoImplements\DaoClientImplement;


class LoginController extends Controller
{

    #[Route('/GameFolio/users/home/login', 'GET')]
    public function index()
    {

        $data=[
            'title'=>htmlspecialchars("Login", ENT_QUOTES, 'UTF-8'),
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
                'title'=>htmlspecialchars("Login", ENT_QUOTES, 'UTF-8'),
                'errorMessage'=>htmlspecialchars("format email ou mot de passe incorecte!!",ENT_QUOTES, 'UTF-8'),
                'scriptDeconecter'=>"/GameFolio/public/scriptsJs/users/scriptDeconecter.js",
            ];

            parent::render("Login", $data);

        } else {

            if (((new DaoClientImplement())->SelectPasswordByEmail($_POST["email"]))!="email ou mot de passe inconnue !!") {

                if (((new DaoClientImplement())->SelectPasswordByEmail($_POST["email"])) != $_POST["password"]) {

                    $data=[
                        'errorMessage'=>htmlspecialchars("Mot de passe incorrect !!",ENT_QUOTES, 'UTF-8'),
                        'title'=>htmlspecialchars("Login", ENT_QUOTES, 'UTF-8'),
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
                    'title'=>htmlspecialchars("Login", ENT_QUOTES, 'UTF-8'),
                    'errorMessage'=>htmlspecialchars("Email inconnue!!",ENT_QUOTES, 'UTF-8'),
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