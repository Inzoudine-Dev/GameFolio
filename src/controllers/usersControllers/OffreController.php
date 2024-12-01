<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerImplements\ManagerOffreImplement;

class OffreController extends Controller
{


    #[Route('/GameFolio/users/home/offres', 'GET')]
    public function index()
    {

        /*si l'utilisateur est connecter ok, sinon il est rediriger vers la page login*/
        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {
            header('Location:/GameFolio/users/home/login');
        } else {

            $data = [
                'title' => 'Offres',
                'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                'email' => $_SESSION["email"]
            ];
            parent::render("views/users/viewOffres.php", $data);
        }

    }

    #[Route('/GameFolio/users/home/offres/', 'GET')]
    public function indexRedirect()
    {
        $this->index();
    }


    #[Route('/GameFolio/users/home/offres/{nomOffre}', 'GET')]
    public function showOffre(string $nomOffre)
    {

        /*si l'utilisateur est connecter ok, sinon il est rediriger vers la page login*/
        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {

            $tabOffre = (new ManagerOffreImplement())->getNOffresForHome(3);
            for ($i = 0; $i < count($tabOffre); $i++) {
                if ($tabOffre[$i] == (new ManagerOffreImplement())->getOffreByName($nomOffre)) {
                    $taf = "trouvé";
                    break;
                }
                $taf = "non trouvé";
            }

            if ($taf == "non trouvé") {
                header('Location:/GameFolio/users/home/login');
            } else {


                $data = [
                    'title' => $nomOffre,
                    'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
                    'nomOffre' => $nomOffre,
                    'datasOffre' => (new ManagerOffreImplement())->getOffreByName($nomOffre),
                ];
            }

            parent::render("views/users/viewDetailsOffre.php", $data);

        } else {

            $data = [
                'title' => $nomOffre,
                'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                'nomOffre' => $nomOffre,
                'datasOffre' => (new ManagerOffreImplement())->getOffreByName($nomOffre),
            ];
        }

        parent::render("views/users/viewDetailsOffre.php", $data);

    }
}