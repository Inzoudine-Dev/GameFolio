<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

use Maham\GameFolio\entities\Offre;

interface DaoOffreInterface
{


    public function selectNOffresForHome(int $n):array;
    public function selectAll():array;
    public function selectOffreById(int $id): Offre;

}