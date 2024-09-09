<?php

namespace Maham\GameFolio\models\DAOs;


interface Dao
{

    public function SelectAll(): array;

    public function insert(object $object): void;

}