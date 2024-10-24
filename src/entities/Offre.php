<?php

namespace Maham\GameFolio\entities;

class Offre
{
    private int $id;
    private String $nomOffre;
    private float $reduction;
    private bool $principale;
    private int $jeuVideoId;


    public function __construct(int $id, string $nomOffre, float $reduction, bool $principale,int $jeuVideoId)
    {
        $this->id = $id;
        $this->nomOffre = $nomOffre;
        $this->reduction = $reduction;
        $this->principale = $principale;
        $this->jeuVideoId = $jeuVideoId;
    }

    /**
     * @return bool
     */
    public function isPrincipale(): bool
    {
        return $this->principale;
    }

    /**
     * @param bool $principale
     */
    public function setPrincipale(bool $principale): void
    {
        $this->principale = $principale;
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
     * @return String
     */
    public function getNomOffre(): string
    {
        return $this->nomOffre;
    }

    /**
     * @param String $nonOffre
     */
    public function setNomOffre(string $nonOffre): void
    {
        $this->nonOffre = $nonOffre;
    }

    /**
     * @return float
     */
    public function getReduction(): float
    {
        return $this->reduction;
    }

    /**
     * @param float $reduction
     */
    public function setReduction(float $reduction): void
    {
        $this->reduction = $reduction;
    }

    /**
     * @return VideoGame
     */
    public function getJeuVideoId(): int
    {
        return $this->jeuVideoId;
    }

    /**
     * @param VideoGame $jeuVideo
     */
    public function setJeuVideoId(int $jeuVideoId): void
    {
        $this->jeuVideoId = $jeuVideoId;
    }

    public function __toString(): string
{
    return 'id_Offre:'.$this->getId().', nomOffre :'.$this->getNomOffre().', reduction :'.$this->getReduction().', est principale :'.$this->isPrincipale().', idJeuVideo :'.$this->getjeuVideoId();
}


}