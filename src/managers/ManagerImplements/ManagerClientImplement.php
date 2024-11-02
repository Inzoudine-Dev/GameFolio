<?php

namespace Maham\GameFolio\managers\ManagerImplements;


use Maham\GameFolio\DAOs\DaoImplements\DaoClientImplement;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerClientInterface;


class ManagerClientImplement implements ManagerClientInterface
{


    public function getPasswordByEmail(string $email): string
    {
        return (new DaoClientImplement())->SelectPasswordByEmail($email);
    }

/*
    public function SelectAll(): array
    {
        $daoClient=new DaoClientImplement();
        $listeClient=$daoClient->SelectAll();
        $listeClientAssociative=[];
        for($i=0;$i<count($listeClient);$i++){
            $listeClientAssociative=$listeClientAssociative+["client".$i+1=>$listeClient[$i]];
        }
        return $listeClientAssociative;
    }

    public function insert(object $client): void
    {
        $daoClient=new DaoClientImplement();
        $daoClient->insert($client);
    }

    */
}