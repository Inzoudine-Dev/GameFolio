<?php

namespace Maham\GameFolio\managers;

use Maham\GameFolio\models\DAOs\DaoJeu;

class ManagerJeu implements Manager
{

    public function SelectAll(): array
    {
        $daoJeu=new DaoJeu();
        $listeJeu=$daoJeu->SelectAll();
        $listeJeuAssociative=[];
        for($i=0;$i<count($listeJeu);$i++){
            $listeJeuAssociative=$listeJeuAssociative+["jeu".$i+1=>$listeJeu[$i]];
        }
        return $listeJeuAssociative;
    }

    public function SelectAllById(): array
    {
        // TODO: Implement SelectAllById() method.
    }

    public function insert(object $client): void
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