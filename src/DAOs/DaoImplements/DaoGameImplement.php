<?php

namespace Maham\GameFolio\DAOs\DaoImplements;

use Exception;
use Maham\GameFolio\DAOs\DaoInterfaces\DaoGameInterface;
use Maham\GameFolio\DAOs\dbConfig\MySqlConnection;
use Maham\GameFolio\entities\VideoGame;
use PDO;

class DaoGameImplement implements DaoGameInterface
{


    private string $nomTable;
    private MySqlConnection $MySql;

    public function __construct()
    {
        $this->nomTable= "videogames";
        $this->MySql= new MySqlConnection('localhost', 'jvdb2', 'root', '');
    }


    public function selectNGamesForHome(int $n): array
    {
        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT * FROM '.$this->nomTable.' where afficher=1'.' LIMIT '.$n;
        $requete = $connection->prepare($sql);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $tab = [];
        for ($i = 0; $i < count($resultat); $i++) {

            $tab[$i]= new VideoGame($resultat[$i]['id'], $resultat[$i]['nomJeu'], $resultat[$i]['categorie'], $resultat[$i]['prix'],$resultat[$i]['urlImage'],$resultat[$i]['afficher']);

        }

        return $tab;
    }


    public function selectNRaceGamesForHome(int $n): array
    {
        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT * FROM '.$this->nomTable.' where categorie="course" and afficher=1'.' LIMIT '.$n;
        $requete = $connection->prepare($sql);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $tab = [];
        for ($i = 0; $i < count($resultat); $i++) {

            $tab[$i]= new VideoGame($resultat[$i]['id'], $resultat[$i]['nomJeu'], $resultat[$i]['categorie'], $resultat[$i]['prix'],$resultat[$i]['urlImage'],$resultat[$i]['afficher']);

        }

        return $tab;
    }

    public function selectNFightGamesForHome(int $n): array
    {
        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT * FROM '.$this->nomTable.' where categorie="combat" and afficher=1'.' LIMIT '.$n;
        $requete = $connection->prepare($sql);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $tab = [];
        for ($i = 0; $i < count($resultat); $i++) {

            $tab[$i]= new VideoGame($resultat[$i]['id'], $resultat[$i]['nomJeu'], $resultat[$i]['categorie'], $resultat[$i]['prix'],$resultat[$i]['urlImage'], $resultat[$i]['afficher']);

        }

        return $tab;
    }


    public function SelectAll(): array
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

                $jeuVideo = new VideoGame($resultat[$i]['id'], $resultat[$i]['nomJeu'], $resultat[$i]['categorie'], $resultat[$i]['prix'],$resultat[$i]['urlImage'], $resultat[$i]['afficher']);
                $tab[$i] = $jeuVideo;
            }

            return $tab;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}