<?php

namespace Maham\GameFolio\models\DAOs\DaoInterfaces;

interface DataInterface
{

    /*selectionnne les données en bdd et les met dans un tableau d'objet BO du dossier objects*/
    public function SelectAll(): array;

    /*prend un entier $id selectionnne les données en bdd et les met dans un objet BO du dossier objects*/
    public function SelectAllById(int $id): object;

    /*prend un objet BO est insert ses parramettres dans une ligne de table de bdd*/
    public function insert(object $object): void;

    /*prend un objet BO et le modifie s'il existe dans une table de bdd*/
    public function update(object $objet):void;


    /*prend un objet BO et le supprime s'il existe dans une table de bdd*/
    public function delete(object $objet):void;

}