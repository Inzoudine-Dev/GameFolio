<?php

namespace Maham\GameFolio\managers;


use Maham\GameFolio\models\DAOs\DaoClient;


class ManagerClient implements Manager
{

/*ici le tableau de client doi etre associative pour etre utiliser ensuite par le controller*/
    public function SelectAll(): array
    {
        $daoClient=new DaoClient();
        $listeClient=$daoClient->SelectAll();
        $listeClientAssociative=[];
        for($i=0;$i<count($listeClient);$i++){
            $listeClientAssociative=$listeClientAssociative+["client".$i+1=>$listeClient[$i]];
        }
        return $listeClientAssociative;
    }

    public function insert(object $client): void
    {
        $daoClient=new DaoClient();
        $daoClient->insert($client);
    }

    public function SelectAllById(): array
    {
        // TODO: Implement SelectAllById() method.
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