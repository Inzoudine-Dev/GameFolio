<?php

namespace Maham\GameFolio\managers\ManagerImplements;

use Maham\GameFolio\DAOs\DaoImplements\DaoOffreImplement;
use Maham\GameFolio\entities\Offre;
use Maham\GameFolio\managers\ManagerInterfaces\ManagerOffreInterface;

class ManagerOffreImplement implements ManagerOffreInterface
{

    public function getNOffresForHome(int $n): array
    {
        /*utilise dao implement ici si on utilise pas de factory*/
        return (new DaoOffreImplement())->selectNOffresForHome($n);
    }


    public function getAllOffres(): array
    {
        return (new DaoOffreImplement())->selectAllOffres();
    }

    public function getOffreByName(string $nomOffre): Offre
    {
        return (new DaoOffreImplement())->selectOffreByName($nomOffre);
    }
}