<?php

namespace Maham\GameFolio\models\DAOs;

use Config\dbConfig\MySqlConnection;
use DateTime;
use Exception;
use PDO;

class Dao
{

    public function SelectAll(string $nomTable):array
    {

        $MySql = new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');
        try {

            try {
                $connection = $MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if ($nomTable == "clients") {

                $sql = 'SELECT * FROM ' . $nomTable;
                $requete = $connection->prepare($sql);
                $requete->execute();
                $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
                return $resultat;
            }

        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function Insert(object $object):void{

        $MySql =new MySqlConnection('localhost', 'gestion_abonnement2', 'root', '');
        try {

            try {
                $connection = $MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }


            if (get_class($object) == 'Maham\GameFolio\models\objects\Client') {
                $nomTable = "clients";

                $sql = 'INSERT INTO ' . $nomTable . '(nom,prenom,dateNaissance,email,telephone,motdepasse) VALUES (?,?,?,?,?,?)';

                $nom = $object->getNom();
                $prenom = $object->getPrenom();
                $dateNaissance = $object->getDateNaissance();
                $email = $object->getEmail();
                $telephone = $object->getTelephone();
                $motdepasse = $object->getMotDePasse();

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
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }
}