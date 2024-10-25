<?php

use Maham\GameFolio\DAOs\DaoImplements\DaoGameImplement;
use Maham\GameFolio\DAOs\DaoImplements\DaoOffreImplement;
use Maham\GameFolio\DAOs\dbConfig\MySqlConnection;
use Maham\GameFolio\managers\ManagerImplements\ManagerGameImplement;

require '../vendor/autoload.php';

$MySql =new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');

/*test exceptions*/
/*try {
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

/*$daoClient=new DaoClientImplement();

$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");

$client=new Client(1,"MAHAMOUD","Inzoudine",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail.fr","0612919361","monMdp");
$client3=new Client(16,"MAHAMOUD2","Inzoudine2",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail2.fr","06129193612","monMdp2");

$client2=new Client(0,"aaaa","cccc",new DateTime('2024-09-08 14:30:00'),"mahamoud-inzoudine@hotmailk2.fr","061291936132","monMdp31");
$client5=new Client(0,"aaaa","cccc",new DateTime('2024-09-08 00:00:00'),"mahamoud-inzoudine@hotmail3.fr","06129193613","monMdp3");
$client4=new Client(0,"MAHAMOUD10","Inzoudine10",new DateTime('1994-04-25 05:00:00'),"mahamoud-inzoudine@hotmail10.fr","0612919361310","monMdp10");
$client6=new Client(0,"MAHAMOUD100","Inzoudine100",new DateTime('1994-04-25 00:00:00'),"mahamoud-inzoudine@hotmail100.fr","06129193613100","monMdp100");

echo"\n";
echo $daoClient->existeClient($client4);
echo $daoClient->existeParams($client);
/*$daoClient->insert($client2);*/

/*$Data1["title1"]="Home1";
$Data1["title2"]="Home1";
$Data1["title3"]="Home3";

$Data2["title4"]="Home4";
$Data2["title5"]="Home5";
$Data2["title6"]="Home6";

var_dump($Data1+$Data2);*/
/*$dao=new DaoOffreImplement();
$dao->selectNOffresPrincipal(3);*/

/*<?php if ($offre->getId()>1): ?>
        <?php endif ;  ?>*/

//var_dump((new DaoOffreImplement())->selectNOffresPrincipal(3));
//var_dump((new ManagerGameImplement())->getNRaceGamesPrincipal(4));
var_dump((new DaoGameImplement())->selectNGamesForHome(8));