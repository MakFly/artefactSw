<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ranking
 *
 * @ORM\Table(name="ranking", indexes={@ORM\Index(name="fk_id_monsters", columns={"id_monsters"})})
 * @ORM\Entity
 */
class Ranking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ranking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRanking;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ranking_tmp", type="string", length=255, nullable=true)
     */
    private $rankingTmp;

    /**
     * @var \Monsters
     *
     * @ORM\ManyToOne(targetEntity="Monsters")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_monsters", referencedColumnName="id")
     * })
     */
    private $idMonsters;



    /**
     * Get the value of idMonsters
     *
     * @return  \Monsters
     */ 
    public function getIdMonsters()
    {
        return $this->idMonsters;
    }

    /**
     * Get the value of rankingTmp
     *
     * @return  string|null
     */ 
    public function getRankingTmp()
    {
        return $this->rankingTmp;
    }
}
