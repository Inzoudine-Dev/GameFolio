<?php

namespace Maham\GameFolio\models\DAOs;

use Exception;
use Maham\GameFolio\models\objects\Client;

class DaoClient extends Dao
{

    public function SelectAllClient():array
    {

        try {
            return $this->SelectAll("clients");
        } catch (Exception $e) {
            throw new Exception("Exception DaoClient!! ".$e->getMessage());
        }
    }


    public function InsertClient(Client $client):void
    {
        try {
            $this->Insert($client);
        } catch (Exception $e) {
            throw new Exception("Exception DaoClient!! ".$e->getMessage());
        }
    }

}