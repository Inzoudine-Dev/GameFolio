<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

use Maham\GameFolio\entities\Offre;

interface ManagerOffreInterface
{

    public function getNOffresForHome(int $n):array;
    public function getAllOffres():array;
    public function getOffreByName(string $nomOffre): Offre;

}