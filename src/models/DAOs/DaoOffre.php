<?php

namespace Maham\GameFolio\models\DAOs;

use Config\dbConfig\MySqlConnection;
use Exception;
use Maham\GameFolio\models\entities\Offre;
use PDO;

class DaoOffre implements Dao
{

    private string $nomTable;
    private MySqlConnection $MySql;

    public function __construct()
    {
        $this->nomTable= "offres";
        $this->MySql= new MySqlConnection('localhost', 'jvdb', 'root', '');
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

                $offre = new Offre($resultat[$i]['id'], $resultat[$i]['nomOffre'], $resultat[$i]['reduction'], $resultat[$i]['jeuxVideos_id']);
                $tab[$i] = $offre;
            }

            return $tab;

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function insert(object $object): void
    {
        // TODO: Implement insert() method.
    }

    public function SelectAllById(int $id): object
    {
        // TODO: Implement SelectAllById() method.
    }

    public function update(object $objet): void
    {
        // TODO: Implement update() method.
    }

    public function delete(object $objet): void
    {
        // TODO: Implement delete() method.
    }
}