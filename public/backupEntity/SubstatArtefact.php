<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubstatArtefact
 *
 * @ORM\Table(name="substat_artefact")
 * @ORM\Entity(repositoryClass="App\Repository\SubstatArtefactRepository")
 */
class SubstatArtefact
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
     * @ORM\Column(name="name", type="string", length=155, nullable=false)
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

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }
}
