<?php

namespace Maham\GameFolio\controllers;
use Templates\View;

abstract class Controller
{

    public function render(string $chemin, array $donnees=null ){

        $vue =new View($chemin);
        $vue->view($donnees);

    }

}