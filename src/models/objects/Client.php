<?php

namespace Maham\GameFolio\models\objects;

use DateTime;

class Client
{

    private int $id;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $email;
    private string $telephone;
    private string $motDePasse;

    /**
     * @param int $id
     * @param string $nom
     * @param string $prenom
     * @param DateTime $dateNaissance
     * @param string $email
     * @param string $telephone
     * @param string $motDePasse
     */
    public function __construct(int $id, string $nom, string $prenom, DateTime $dateNaissance, string $email, string $telephone, string $motDePasse)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->motDePasse = $motDePasse;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return DateTime
     */
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param DateTime $dateNaissance
     */
    public function setDateNaissance(DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @param string $motDePasse
     */
    public function setMotDePasse(string $motDePasse): void
    {
        $this->motDePasse = $motDePasse;
    }


    public function __toString(): string
    {
        return 'id_personnes :'.$this->getId().', nom :'.$this->getNom().', prenom :'.$this->getPrenom().', date de naissance :'.$this->getDateNaissance().', email :'.$this->getEmail().', numero de telephone :'.$this->getTelephone().', mot de pass :'.$this->getMotDePasse();

    }


}