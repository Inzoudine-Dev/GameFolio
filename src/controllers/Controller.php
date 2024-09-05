<?php

namespace Maham\GameFolio\controllers;
use Templates\View;

class Controller
{
    public function render(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->view($donnees);

    }

}