<?php

namespace Maham\GameFolio\managers\ManagerInterfaces;

interface ManagerClientInterface
{

    public function getPasswordByEmail(string $email):string;
    
    
}