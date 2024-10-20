<?php

namespace Maham\GameFolio\models\DAOs\DaoInterfaces;

interface DataClientsInterface extends DataInterface
{
    /*selectionnne les données en bdd et les met dans un tableau d'objet BO du dossier objects*/
    public function SelectByEmail(): array;
}