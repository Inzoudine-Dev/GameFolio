<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;


use Maham\GameFolio\entities\VideoGame;

interface DaoGameInterface
{
    public function selectNGamesForHome(int $n):array;
    public function selectGameById(int $id):VideoGame;
    public function selectGameByName(string $nomJeu):VideoGame;
    public function selectAll():array;


}