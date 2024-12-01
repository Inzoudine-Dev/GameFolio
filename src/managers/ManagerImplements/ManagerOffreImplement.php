<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoOffreImplement;
use Maham\GameFolio\entities\Offre;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerOffreInterface;

class ManagerOffreImplement implements ManagerOffreInterface
{

    public function getNOffresForHome(int $n): array
    {
        /*utilise dao implement ici si on utilise pas de factory*/
        return (new DaoOffreImplement())->selectNOffresForHome($n);
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

    public function getOffreByName(string $nomOffre): Offre
    {
        return (new DaoOffreImplement())->selectOffreByName($nomOffre);
    }
}