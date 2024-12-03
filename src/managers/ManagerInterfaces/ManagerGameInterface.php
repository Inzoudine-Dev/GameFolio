<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

use Maham\GameFolio\entities\VideoGame;

interface ManagerGameInterface
{

    public function getNGamesForHome(int $n):array;
    public function getGameByName(string $nomJeu):VideoGame;
    public function getAllGames():array;

}