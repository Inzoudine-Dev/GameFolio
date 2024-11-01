<?php

namespace Maham\GameFolio\DAOs\DaoImplements;

use Exception;
use Maham\GameFolio\DAOs\DaoInterfaces\DaoOffreInterface;
use Maham\GameFolio\DAOs\dbConfig\MySqlConnection;
use Maham\GameFolio\entities\Offre;
use Maham\GameFolio\entities\VideoGame;
use PDO;

class DaoOffreImplement implements DaoOffreInterface
{

    private string $nomTable;
    private MySqlConnection $MySql;

    public function __construct()
    {
        $this->nomTable= "offres";
        $this->MySql= new MySqlConnection('localhost', 'jvdb2', 'root', '');
    }


    public function selectNOffresForHome(int $n): array
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

            $tab[$i]= new Offre($resultat[$i]['id'], $resultat[$i]['nomOffre'], $resultat[$i]['reduction'],(new DaoGameImplement())->selectGameById($resultat[$i]['jeuxVideos_id']));

        }

        return $tab;
    }


    public function selectOffreById(int $id): Offre
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
            $offre = new Offre($resultat[0]['id'], $resultat[0]['nomOffre'], $resultat[0]['reduction'], $resultat[0]['jeuxVideos_id']);
            return $offre;
        }else{
            return new Offre(0,'offre inexistant','0.0',new VideoGame(0,'innéxistant','rien',0,'urlVide'));
        }
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

                $tab[$i]= new Offre($resultat[$i]['id'], $resultat[$i]['nomOffre'], $resultat[$i]['reduction'], (new DaoGameImplement())->selectGameById($resultat[$i]['jeuxVideos_id']));

            }

            return $tab;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}