<?php

namespace Maham\GameFolio\managers;


use Maham\GameFolio\models\DAOs\DaoClient;

class ManagerClient implements Manager
{

/*ici le tableau de client doi etre associative pour etr utiliser par le controller*/
    public function SelectAll(): array
    {
        $daoClient=new DaoClient();
        $listeClient=$daoClient->SelectAll();
        $listeClientAssociative=[];
        for($i=0;$i<count($listeClient);$i++){
            $listeClientAssociative=$listeClientAssociative+["objet".$i+1=>$listeClient[$i]];
        }
        return $listeClientAssociative;
    }

    public function insert(object $client): void
    {
        $daoClient=new DaoClient();
        $daoClient->insert($client);
    }
}