<?php

namespace Maham\GameFolio\DAOs\DaoImplements;

use Exception;
use Maham\GameFolio\DAOs\DaoInterfaces\DaoClientInterface;
use Maham\GameFolio\DAOs\dbConfig\MySqlConnection;
use Maham\GameFolio\entities\Client;
use PDO;

class DaoClientImplement implements DaoClientInterface
{
    private string $nomTable;
    private MySqlConnection $MySql;

    public function __construct()
    {
        $this->nomTable = "clients";
        $this->MySql = new MySqlConnection('localhost', 'jvdb2', 'root', '');
    }

    public function SelectPasswordByEmail(string $email): string
    {
        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT motdepasse FROM ' . $this->nomTable . ' where email= :email';
        $requete = $connection->prepare($sql);
        $requete->bindValue(':email', $email, PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        if ($resultat) {
            return $resultat[0]['motdepasse'];
        } else {
            return 'email ou mot de passe inconnue !!';
        }

    }

    public function SelectTelephoneByEmail(string $email): string
    {
        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT telephone FROM ' . $this->nomTable . ' where email= :email';
        $requete = $connection->prepare($sql);
        $requete->bindValue(':email', $email, PDO::PARAM_STR);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        if ($resultat) {
            return $resultat[0]['telephone'];
        } else {
            return 'email inconnue !!';
        }

    }

    public function InsertClient(Client $client): void
    {

            try {
                $connection = $this->MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

        $sql = 'INSERT INTO ' . $this->nomTable . ' (nom, prenom, dateNaissance, email, telephone, motdepasse) 
        VALUES (:nom, :prenom, :dateNaissance, :email, :telephone, :motdepasse)';

                $nom = $client->getNom();
                $prenom = $client->getPrenom();
                $dateNaissance = $client->getDateNaissance()->format('Y-m-d');
                $email = $client->getEmail();
                $telephone = $client->getTelephone();
                $motdepasse = $client->getMotDePasse();
                $requete = $connection->prepare($sql);
                $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
                $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $requete->bindValue(':dateNaissance', $dateNaissance, PDO::PARAM_STR);
                $requete->bindValue(':email', $email, PDO::PARAM_STR);
                $requete->bindValue(':telephone', $telephone, PDO::PARAM_STR);
                $requete->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);
                $requete->execute();

            }


    /*public function SelectAll(): array
    {
        try {

            try {
                $connection = $this->MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            $sql = 'SELECT * FROM ' . $this->nomTable;
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

    public function insert(object $client): void
    {
        try {

            try {
                $connection = $this->MySql->getConnection();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }

            if (get_class($client) == 'Maham\GameFolio\models\objects\Client') {


                    $sql = 'INSERT INTO ' . $this->nomTable . '(nom,prenom,dateNaissance,email,telephone,motdepasse) VALUES (?,?,?,?,?,?)';

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
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }



    /*public function existeClient(Client $client):bool
     {

             $tab=$this->selectAll();
             $resultat = false;
             for ($i = 0; $i < count($tab); $i++) {

                 $resultat = $resultat || (($client->getNom() == $tab[$i]->getNom()) &&
                         ($client->getPrenom() == $tab[$i]->getPrenom()) &&
                         ($client->getDateNaissance() == $tab[$i]->getDateNaissance()) &&
                         ($client->getEmail() == $tab[$i]->getEmail()) &&
                         ($client->getTelephone() == $tab[$i]->getTelephone()) &&
                         ($client->getMotDePasse() == $tab[$i]->getMotDePasse()));
             }
             return $resultat;

     }

    public function existeParams(Client $client):bool
    {

        $tab=$this->selectAll();
        $resultat=false;
        for ($i = 0; $i < count($tab); $i++) {

            $resultat = $resultat || ((

                    ($client->getEmail() == $tab[$i]->getEmail()) ||
                    ($client->getTelephone() == $tab[$i]->getTelephone()) ||
                    ($client->getMotDePasse() == $tab[$i]->getMotDePasse())));
        }
        return $resultat;

    }*/

}