<?php

use Config\dbConfig\MySqlConnection;
use Maham\GameFolio\models\DAOs\DaoClient;
use Maham\GameFolio\models\objects\Client;

require '../../vendor/autoload.php';

 $MySql =new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');


$MySql->isConnected($MySql->getConnection());

$client=new Client(0,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 14:30:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");
$dao=new DaoClient();

/*try {
    $dao->InsertClient($client);
}catch (Exception $e){
    throw new Exception("Exception testConnection.php !! ".$e->getMessage());
}*/


try {
    echo ($dao->SelectAllClient()[0]['nom']);
}catch (Exception $e){
    throw new Exception("Exception testConnection.php !! ".$e->getMessage());
}