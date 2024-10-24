<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

interface DaoOffreInterface
{


    public function selectNOffresForHome(int $n):array;
    public function selectAll():array;

}