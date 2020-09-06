<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementType
 *
 * @ORM\Table(name="element_type")
 * @ORM\Entity
 */
class ElementType
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
