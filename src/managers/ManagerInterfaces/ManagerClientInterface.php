<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

use Maham\GameFolio\entities\Client;

interface ManagerClientInterface
{

    public function getPasswordByEmail(string $email):string;
    public function getTelephoneByEmail(string $email):string;
    public function InsertClient(Client $client):void;


}