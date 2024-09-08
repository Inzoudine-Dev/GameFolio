<?php

use Config\dbConfig\MySqlConnection;
use Maham\GameFolio\models\DAOs\Dao;
use Maham\GameFolio\models\DAOs\DaoClient;
use Maham\GameFolio\models\objects\Client;

require '../../vendor/autoload.php';

$MySql =new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');


$MySql->isConnected($MySql->getConnection());

$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");

$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");
$client3=new Client(16,"MAHAMOUD2","Inzoudine2",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail2.fr","06129193612","monMdp2");

$client2=new Client(0,"aaaa","cccc",new DateTime('2024-09-08 14:30:00'),"mahamoud-inzoudine@hotmail3.fr","06129193613","monMdp3");
$client4=new Client(0,"MAHAMOUD10","Inzoudine10",new DateTime('1994-04-25 05:00:00'),"mahamoud-inzoudine@hotmail10.fr","0612919361310","monMdp10");

$daoClient=new DaoClient();

//$daoClient->Insert($client4);

var_dump($daoClient->SelectAll());

/*
function factoriel(int $n){
    if($n==0){
        return 1;
    }else{
        return factoriel($n-1)*$n;
    }
};

echo factoriel(2);
echo "\n";
var_dump(true || false|| false|| false|| false|| false);
echo "\n";
var_dump(true && false);*/