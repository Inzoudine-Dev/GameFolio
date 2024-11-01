<?php

namespace Maham\GameFolio\controllers;
use Templates\View;

abstract class Controller
{
    public function render(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->view($donnees);

    }

    public function renderUserShared(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->viewUserShared($donnees);

    }

    public function renderAmdin(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->viewAdmin($donnees);

    }

    public function renderAdminShared(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->viewAdminShared($donnees);

    }

}