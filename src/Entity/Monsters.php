<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monsters
 *
 * @ORM\Table(name="monsters", uniqueConstraints={@ORM\UniqueConstraint(name="id_monsters", columns={"id"})}, indexes={@ORM\Index(name="id_prefered_stats", columns={"id_prefered_stats"})})
 * @ORM\Entity
 */
class Monsters
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="grade", type="integer", nullable=false)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="monster", type="string", length=255, nullable=false)
     */
    private $monster;

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=255, nullable=false)
     */
    private $element;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="awake", type="string", length=255, nullable=false)
     */
    private $awake;

    /**
     * @var string
     *
     * @ORM\Column(name="ranking", type="string", length=255, nullable=false)
     */
    private $ranking;

    /**
     * @var \PreferedStats
     *
     * @ORM\ManyToOne(targetEntity="PreferedStats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prefered_stats", referencedColumnName="id")
     * })
     */
    private $idPreferedStats;



    /**
     * Get the value of idPreferedStats
     *
     * @return  \PreferedStats
     */ 
    public function getIdPreferedStats()
    {
        return $this->idPreferedStats;
    }

    /**
     * Get the value of ranking
     *
     * @return  string
     */ 
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Get the value of awake
     *
     * @return  string
     */ 
    public function getAwake()
    {
        return $this->awake;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of element
     *
     * @return  string
     */ 
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Get the value of monster
     *
     * @return  string
     */ 
    public function getMonster()
    {
        return $this->monster;
    }

    /**
     * Get the value of grade
     *
     * @return  int
     */ 
    public function getGrade()
    {
        return $this->grade;
    }
}
