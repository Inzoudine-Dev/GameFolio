<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\entities\Offre;
use Maham\GameFolio\entities\VideoGame;
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
                'email' => $_SESSION["email"],
                'dataAllOffres' => (new ManagerOffreImplement())->getAllOffres(),
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
        session_start();
        if (!isset($_SESSION['statut'], $_SESSION['email'], $_SESSION['password'])) {

            $homeOffre = (new ManagerOffreImplement())->getNOffresForHome(3);
            for ($i = 0; $i < count($homeOffre); $i++) {
                if ($homeOffre[$i] == (new ManagerOffreImplement())->getOffreByName($nomOffre)) {
                    $statut = "trouvé";
                    break;
                }
                $statut = "non trouvé";
            }

            if ($statut== "non trouvé") {
                header('Location:/GameFolio/users/home/login');
            } else {


                $data = [
                    'title' => $nomOffre,
                    'scriptDeconecter' => '/GameFolio/public/scriptsJs/users/scriptDeconecter.js',
                    'linkReserver' => '/GameFolio/users/home/login',
                    'nomOffre' => $nomOffre,
                    'datasOffre' => (new ManagerOffreImplement())->getOffreByName($nomOffre),
                ];
            }


        } else {

            if (!(new ManagerOffreImplement())->getOffreByName($nomOffre) || ((new ManagerOffreImplement())->getOffreByName($nomOffre) === new Offre(0,'offre inexistant','0.0',new VideoGame(0,'innéxistant','rien',0,'urlVide')))) {
                $data = [
                    'title' => $nomOffre,
                    'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                    'scriptHide' => '/GameFolio/public/scriptsJs/users/scriptHide.js',
                    'statut' => 'Elément demender est existe pas !!',
                ];

            } else {

                $data = [
                    'title' => $nomOffre,
                    'scriptConecter' => '/GameFolio/public/scriptsJs/users/scriptConecter.js',
                    'nomOffre' => $nomOffre,
                    'datasOffre' => (new ManagerOffreImplement())->getOffreByName($nomOffre),
                ];
            }
        }

        parent::render("views/users/viewDetailsOffre.php", $data);

    }
}