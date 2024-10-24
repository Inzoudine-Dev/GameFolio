<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoOffreImplement;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerOffreInterface;

class ManagerOffreImplement implements ManagerOffreInterface
{

    public function getNOffresForHome(int $n): array
    {
        $dao=new DaoOffreImplement();/*utilise dao ici si on utilise pas de factory*/
        return $dao->selectNOffresForHome($n);
    }


    public function getAllOffre(): array
    {
        $daoOffre=new DaoOffreImplement();
        $listeOffre=$daoOffre->SelectAll();
        $listeOffreAssociative=[];
        for($i=0;$i<count($listeOffre);$i++){
            $listeOffreAssociative=$listeOffreAssociative+["offre".$i+1=>$listeOffre[$i]];
        }
        return $listeOffreAssociative;
    }

}