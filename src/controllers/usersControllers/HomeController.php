<?php

namespace Maham\GameFolio\controllers\usersControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;
use Maham\GameFolio\managers\ManagerJeu;
use Maham\GameFolio\managers\ManagerOffre;

class HomeController extends Controller
{

    #[Route('/GameFolio/users/home', 'GET')]
    public function index()
    {


            $offres = $this->troisOffre();
            $jeux = $this->quatresJeux();

            // Créer un tableau de données à passer à la vue
            $data = [
                'title' => 'Home',
                'offres' => $offres,
                'jeux' => $jeux,
            ];

            // Appel de la vue avec les données
            parent::render('home', $data);

    }

    #[Route('/GameFolio/users/home/','GET')]
    public function indexRedirect()
    {
        $this->index();
    }

        public function troisOffre():array{
            $newOffres=[];
            for($i=1;$i<4;$i++){
                $managerOffre = new ManagerOffre();
                $offres = $managerOffre->SelectAll();
                $newOffres[$i]=$offres['offre'.$i];
            }
            return $newOffres;
        }

    public function quatresJeux():array{
        $newJeux=[];
        for($i=1;$i<5;$i++){
            $managerJeux = new ManagerJeu();
            $jeux = $managerJeux->SelectAll();
            $newJeux[$i]=$jeux['jeu'.$i];
        }
        return $newJeux;
    }

}