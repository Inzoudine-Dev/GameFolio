<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

use Maham\GameFolio\entities\Client;

interface DaoClientInterface
{
    /*selectionnne les données en bdd et les met dans un tableau d'objet BO du dossier objects*/
    public function SelectPasswordByEmail(string $email): string;
    public function SelectTelephoneByEmail(string $email): string;
    public function InsertClient(Client $client): void;
}