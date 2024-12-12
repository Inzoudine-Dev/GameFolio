<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

use Maham\GameFolio\entities\Offre;

interface DaoOffreInterface
{


    public function selectNOffresForHome(int $n):array;
    public function selectAllOffres():array;
    public function selectOffreByName(string $nomOffre): Offre;
    //public function selectOffreById(int $id): Offre;


}