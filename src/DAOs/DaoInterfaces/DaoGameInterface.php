<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;


interface DaoGameInterface
{


    public function selectNRaceGamesForHome(int $n):array;
    public function selectNFightGamesForHome(int $n):array;
    public function selectAll():array;


}