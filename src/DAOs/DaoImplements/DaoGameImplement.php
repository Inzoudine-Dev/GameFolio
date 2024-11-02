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

        $sql = 'SELECT * FROM '.$this->nomTable.' LIMIT :limit';
        $requete = $connection->prepare($sql);
        $requete->bindValue(':limit', (int)$n, PDO::PARAM_INT);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        $tab = [];
        for ($i = 0; $i < count($resultat); $i++) {

            $tab[$i]= new VideoGame($resultat[$i]['id'],$resultat[$i]['nomJeu'],$resultat[$i]['categorie'],$resultat[$i]['prix'],$resultat[$i]['urlImage']);
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

                $jeuVideo = new VideoGame($resultat[$i]['id'], $resultat[$i]['nomJeu'], $resultat[$i]['categorie'], $resultat[$i]['prix'],$resultat[$i]['urlImage']);
                $tab[$i] = $jeuVideo;
            }

            return $tab;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function selectGameById(int $id): VideoGame
    {

        try {
            $connection = $this->MySql->getConnection();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $sql = 'SELECT * FROM ' . $this->nomTable . ' WHERE id = :id';
        $requete = $connection->prepare($sql);
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

        if ($resultat) {
            $game = new VideoGame($resultat[0]['id'],htmlspecialchars($resultat[0]['nomJeu'],ENT_QUOTES,'UTF-8'),htmlspecialchars($resultat[0]['categorie'],ENT_QUOTES,'UTF-8'), $resultat[0]['prix'],htmlspecialchars($resultat[0]['urlImage'],ENT_QUOTES,'UTF-8'));
            return $game;
        }else{
            return new VideoGame(0,'jeu inexistant','inexistant',0,'vide');
        }


    }
}