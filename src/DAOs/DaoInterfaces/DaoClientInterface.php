<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

interface DaoClientInterface
{
    /*selectionnne les données en bdd et les met dans un tableau d'objet BO du dossier objects*/
    public function SelectPasswordByEmail(string $email): string;
}