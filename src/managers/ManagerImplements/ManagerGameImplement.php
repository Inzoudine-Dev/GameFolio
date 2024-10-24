<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoGameImplement;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerGameInterface;

class ManagerGameImplement implements ManagerGameInterface
{


    public function getNFightGamesForHome(int $n): array
    {

        $dao=new DaoGameImplement();/*utilise dao ici si on utilise pas de factory*/
        return $dao->selectNFightGamesForHome($n);

    }

    public function getNRaceGamesForHome(int $n): array
    {
        $dao=new DaoGameImplement();/*utilise dao ici si on utilise pas de factory*/
        return $dao->selectNRaceGamesForHome($n);
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