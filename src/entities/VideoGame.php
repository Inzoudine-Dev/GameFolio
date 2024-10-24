<?php

namespace Maham\GameFolio\entities;

class VideoGame
{

    private int $id;
    private string $nomJeu;
    private string $categorie;
    private float $prix;
    private string $urlimage;
    private bool $afficher;

    /**
     * @param int $id
     * @param string $nomJeu
     * @param string $categorie
     * @param float $prix
     */
    public function __construct(int $id, string $nomJeu, string $categorie, float $prix,string $urlimage,bool $afficher)
    {
        $this->id = $id;
        $this->nomJeu = $nomJeu;
        $this->categorie = $categorie;
        $this->urlimage = $urlimage;
        $this->prix = $prix;
        $this->afficher = $afficher;

    }

    /**
     * @return bool
     */
    public function isAfficher(): bool
    {
        return $this->afficher;
    }

    /**
     * @param bool $afficher
     */
    public function setAfficher(bool $afficher): void
    {
        $this->afficher = $afficher;
    }

    /**
     * @return string
     */
    public function getUrlimage(): string
    {
        return $this->urlimage;
    }

    /**
     * @param string $urlimage
     */
    public function setUrlimage(string $urlimage): void
    {
        $this->urlimage = $urlimage;
    }



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomJeu(): string
    {
        return $this->nomJeu;
    }

    /**
     * @param string $nomJeu
     */
    public function setNomJeu(string $nomJeu): void
    {
        $this->nomJeu = $nomJeu;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function __toString(): string
{
    return 'id_jeu:'.$this->getId().', nomJeu :'.$this->getNomJeu().', categorie :'.$this->getCategorie().', prix :'.$this->getPrix().' urlimage :'.$this->getUrlimage().' est afficher :'.$this->isAfficher();

}

}