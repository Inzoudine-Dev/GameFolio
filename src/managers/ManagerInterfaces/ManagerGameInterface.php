<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

interface ManagerGameInterface
{

    public function getNFightGamesForHome(int $n):array;
    public function getNRaceGamesForHome(int $n):array;
    public function getAllGames():array;

}