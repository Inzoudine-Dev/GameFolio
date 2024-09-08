<?php

namespace Maham\GameFolio\models\DAOs;

use Config\dbConfig\MySqlConnection;
use DateTime;
use Exception;
use Maham\GameFolio\models\objects\Client;
use PDO;

class DaoClient implements Dao
{

    public function SelectAll(): array
    {
        $tableName="clients";
        $MySql = new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');
        try {

            try {
                $connection = $MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            $sql = 'SELECT * FROM ' . $tableName;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);


            $tab = [];
            for ($i = 0; $i < count($resultat); $i++) {
                $client = new Client($resultat[$i]['id'], $resultat[$i]['nom'], $resultat[$i]['prenom'], new DateTime($resultat[$i]['dateNaissance']), $resultat[$i]['email'], $resultat[$i]['telephone'], $resultat[$i]['motdepasse']);
                $tab[$i] = $client;
            }

            return $tab;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


        /* public function existeClient(Client $client):bool
         {

                 $tab=$this->selectAllClient();
                 $resultat = false;
                 for ($i = 0; $i < count($tab); $i++) {

                     $resultat = $resultat || (($client->getNom() == $tab[$i]->getNom()) &&
                             ($client->getPrenom() == $tab[$i]->getPrenom()) &&
                             ($client->getPrenom() == $tab[$i]->getPrenom()) &&
                             ($client->getDateNaissance() == $tab[$i]->getDateNaissance()) &&
                             ($client->getEmail() == $tab[$i]->getEmail()) &&
                             ($client->getTelephone() == $tab[$i]->getTelephone()) &&
                             ($client->getMotDePasse() == $tab[$i]->getMotDePasse()));
                 }
                 return $resultat;
         }

*/

    public function Insert(object $client): void
    { $MySql =new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');
        try {

            try {
                $connection = $MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

                $nomTable = "clients";

                $sql = 'INSERT INTO ' . $nomTable . '(nom,prenom,dateNaissance,email,telephone,motdepasse) VALUES (?,?,?,?,?,?)';

                $nom = $client->getNom();
                $prenom = $client->getPrenom();
                $dateNaissance = $client->getDateNaissance();
                $email = $client->getEmail();
                $telephone = $client->getTelephone();
                $motdepasse = $client->getMotDePasse();

                if ($dateNaissance instanceof DateTime) {
                    $dateNaissance = $dateNaissance->format('Y-m-d');
                }

                $requete = $connection->prepare($sql);
                $requete->bindParam(1, $nom);
                $requete->bindParam(2, $prenom);
                $requete->bindParam(3, $dateNaissance);
                $requete->bindParam(4, $email);
                $requete->bindParam(5, $telephone);
                $requete->bindParam(6, $motdepasse);
                $requete->execute();
                $requete->fetchAll();
            }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }
}