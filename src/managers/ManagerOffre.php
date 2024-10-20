<?php

namespace Maham\GameFolio\managers;

use Maham\GameFolio\models\DAOs\DaoClasses\DaoOffre;

class ManagerOffre
{

    public function SelectAll(): array
    {
        $daoOffre=new DaoOffre();
        $listeOffre=$daoOffre->SelectAll();
        $listeOffreAssociative=[];
        for($i=0;$i<count($listeOffre);$i++){
            $listeOffreAssociative=$listeOffreAssociative+["offre".$i+1=>$listeOffre[$i]];
        }
        return $listeOffreAssociative;
    }

    public function SelectAllById(): array
    {
        // TODO: Implement SelectAllById() method.
    }

    public function insert(Object $client): void
    {
        // TODO: Implement insert() method.
    }

    public function update(object $objet): void
    {
        // TODO: Implement update() method.
    }

    public function delete(object $objet): void
    {
        // TODO: Implement delete() method.
    }
}