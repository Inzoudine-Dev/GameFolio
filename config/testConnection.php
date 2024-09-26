<?php

use Config\dbConfig\MySqlConnection;
use Maham\GameFolio\models\objects\Client;

require '../vendor/autoload.php';

$MySql =new MySqlConnection('localhost', 'gestion_abonnement1', 'root', '');

/*test exceptions*/
try {
    $MySql->getConnection();
    echo "connexion ok!!!";
}catch (Exception $e){
    throw new Exception("getConnection() a revoyer une erreur :".$e->getMessage());
}
//echo $MySql->__tostring()."\n";

// Fonction personnalisée pour gérer les exceptions
/*function monGestionnaireException($exception) {
    error_log("Exception capturée : " . $exception->getMessage());

    echo "Une erreur est survenue. Veuillez réessayer plus tard.";
}

// Définir cette fonction comme gestionnaire des exceptions
set_exception_handler('monGestionnaireException');*/


$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");

$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");
$client3=new Client(16,"MAHAMOUD2","Inzoudine2",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail2.fr","06129193612","monMdp2");

$client2=new Client(0,"aaaa","cccc",new DateTime('2024-09-08 14:30:00'),"mahamoud-inzoudine@hotmail3.fr","06129193613","monMdp3");
$client4=new Client(0,"MAHAMOUD10","Inzoudine10",new DateTime('1994-04-25 05:00:00'),"mahamoud-inzoudine@hotmail10.fr","0612919361310","monMdp10");

