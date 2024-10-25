<?php

namespace Maham\GameFolio\DAOs\DaoInterfaces;

interface DaoJoinInterface
{

    public function selectOffresGames():array;


    /*$sql = 'SELECT utilisateurs.nom, commandes.date, commandes.montant
        FROM utilisateurs
        JOIN commandes ON utilisateurs.id = commandes.utilisateur_id
        WHERE utilisateurs.id = :id_utilisateur';

$stmt = $pdo->prepare($sql);
$stmt->execute(['id_utilisateur' => $id_utilisateur]);
$result = $stmt->fetchAll();
*/

}