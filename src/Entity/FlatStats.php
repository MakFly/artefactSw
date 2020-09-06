<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlatStats
 *
 * @ORM\Table(name="flat_stats")
 * @ORM\Entity
 */
class FlatStats
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;



    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }
}
