<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use DateTime;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\entities\Client;
use Maham\GameFolio\managers\ManagerImplements\ManagerClientImplement;

class RegisterController extends Controller
{


    #[Route('/GameFolio/users/home/registration', 'GET')]
    public function index()
    {

        $data = [
            'title' =>'Registration',
            'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
        ];

        parent::render('Registration', $data);
    }



    #[Route('/GameFolio/users/home/registration/', 'GET')]
    public function indexRedirect()
    {
        $this->index();
    }

    #[Route('/GameFolio/users/home/registration', 'POST')]
    public function register()
    {
        if(htmlspecialchars($_POST['nom'])!=$_POST['nom'] || htmlspecialchars($_POST['prenom'])!=$_POST['prenom']
            || htmlspecialchars($_POST['telephone'])!=$_POST['telephone']){

            $data = [
                'title' =>'Registration',
                'errorMessage'=>"Des carateres non autosisé detectées!!",
                'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
            ];

            parent::render("Registration", $data);
        }
        else{

            $pattern = '/^0[1-9]\d{8}$/';
            if(!preg_match($pattern, $_POST['telephone'])){
                $data = [
                'title' =>'Registration',
                'errorMessage'=>"Le fromat du numero de telephone est incorrecte!!",
                'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
            ];

            parent::render("Registration", $data);

            }else{

            if(((new ManagerClientImplement())->getTelephoneByEmail(($_POST['email'])))!='email inconnue !!'){
                $data = [
                    'title' =>'Registration',
                    'errorMessage'=>"Cette email est déja lier a un compte existant, connecter vous!!",
                    'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
                ];

                parent::render("Registration", $data);
            }else{

                ((new ManagerClientImplement()))->InsertClient(new Client(0,$_POST['nom'],$_POST['prenom'],new DateTime($_POST['dateNaissance']),$_POST['email'],$_POST['telephone'],password_hash($_POST['password'], PASSWORD_BCRYPT)));

                $data = [
                    'title' =>'Registration',
                    'registerMessage'=>"Félicitation , votre compte est creer!!, connecter vous!!",
                    'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
                    'identifiantEmail' => $_POST['email'],
                ];

                parent::render("Registration", $data);
            }
        }
    }
    }

}