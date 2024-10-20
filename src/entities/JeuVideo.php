<?php

namespace Maham\GameFolio\entities;

class JeuVideo
{

    private int $id;
    private string $nomJeu;
    private string $categorie;
    private float $prix;
    private string $urlimage;

    /**
     * @param int $id
     * @param string $nomJeu
     * @param string $categorie
     * @param float $prix
     */
    public function __construct(int $id, string $nomJeu, string $categorie,string $urlimage, float $prix)
    {
        $this->id = $id;
        $this->nomJeu = $nomJeu;
        $this->categorie = $categorie;
        $this->urlimage = $urlimage;
        $this->prix = $prix;

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
    return 'id_jeu:'.$this->getId().', nomJeu :'.$this->getNomJeu().', categorie :'.$this->getCategorie().', prix :'.$this->getPrix().' urlimage :'.$this->getUrlimage();

}

}