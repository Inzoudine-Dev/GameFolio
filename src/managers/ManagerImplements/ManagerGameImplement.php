<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoGameImplement;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerGameInterface;

class ManagerGameImplement implements ManagerGameInterface
{

    public function getNGamesForHome(int $n): array
    {
        /*utilise daoimplt ici si on utilise pas de factory*/
        return (new DaoGameImplement())->selectNGamesForHome($n);
    }

    public function getNFightGamesForHome(int $n): array
    {

        /*utilise daoimplt ici si on utilise pas de factory*/
        return (new DaoGameImplement())->selectNFightGamesForHome($n);

    }



    public function getNRaceGamesForHome(int $n): array
    {
        /*utilise dao ici si on utilise pas de factory*/
        return (new DaoGameImplement())->selectNRaceGamesForHome($n);
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

}