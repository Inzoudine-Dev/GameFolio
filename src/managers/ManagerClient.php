<?php

namespace Maham\GameFolio\managers;


use Maham\GameFolio\models\DAOs\DaoClient;

class ManagerClient implements Manager
{

/*ici le tableau de client doi etre associative pour etr utiliser par le controller*/
    public function SelectAll(): array
    {
        $daoClient=new DaoClient();
        return $daoClient->SelectAll();
    }

    public function insert(object $client): void
    {
        $daoClient=new DaoClient();
        $daoClient->insert($client);
    }
}