<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoGameImplement;
use Maham\GameFolio\entities\VideoGame;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerGameInterface;

class ManagerGameImplement implements ManagerGameInterface
{

    public function getNGamesForHome(int $n): array
    {
        /*utilise daoimplt ici si on utilise pas de factory*/
        return (new DaoGameImplement())->selectNGamesForHome($n);
    }



    public function getAllGames(): array
    {
        $daoJeu=new DaoGameImplement();
        $listeJeu=$daoJeu->SelectAll();
        $listeJeuAssociative=[];
        for($i=0;$i<count($listeJeu);$i++){
            $listeJeuAssociative=$listeJeuAssociative+["jeu".$i+1=>$listeJeu[$i]];
        }
        return $listeJeuAssociative;
    }

    public function getGameByName(string $nomJeu): VideoGame
    {
        return (new DaoGameImplement())->selectGameByName($nomJeu);
    }
}