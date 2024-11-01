<?php

namespace Maham\GameFolio\entities;

class Offre
{
    private int $id;
    private String $nomOffre;
    private float $reduction;
    private VideoGame $game;


    public function __construct(int $id, string $nomOffre, float $reduction,VideoGame $game)
    {
        $this->id = $id;
        $this->nomOffre = $nomOffre;
        $this->reduction = $reduction;
        $this->game = $game;
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
    public function getGame(): VideoGame
    {
        return $this->game;
    }

    /**
     * @param VideoGame $game
     */
    public function setGame(VideoGame $game): void
    {
        $this->game = $game;
    }



    public function __toString(): string
{
    return 'id_Offre:'.$this->getId().', nomOffre :'.$this->getNomOffre().', reduction :'.$this->getReduction().', JeuVideo :'.$this->getGame();
}


}