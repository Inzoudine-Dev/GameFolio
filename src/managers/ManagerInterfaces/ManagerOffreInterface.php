<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

interface ManagerOffreInterface
{

    public function getNOffresForHome(int $n):array;
    public function getAllOffre():array;

}