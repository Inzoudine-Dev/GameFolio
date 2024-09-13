<?php

namespace Maham\GameFolio\managers;

use Maham\GameFolio\models\objects\Client;

interface Manager
{

    public function SelectAll(): array;

    public function SelectAllById(): array;

    public function insert(object $objet): void;

    public function update(object $objet):void;

    public function delete(object $objet):void;

}