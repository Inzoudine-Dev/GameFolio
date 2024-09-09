<?php

namespace Maham\GameFolio\managers;

interface Manager
{

    public function SelectAll(): array;

    public function insert(object $object): void;

}