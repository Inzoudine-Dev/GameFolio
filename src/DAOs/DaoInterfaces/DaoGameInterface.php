<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;


use Maham\GameFolio\entities\VideoGame;

interface DaoGameInterface
{
    public function selectNGamesForHome(int $n):array;
    public function selectGamesById(int $id):string; //VideoGame;
    public function selectAll():array;


}