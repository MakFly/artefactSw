<?php

namespace App\Repository;

use App\Entity\Monsters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Monsters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Monsters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Monsters[]    findAll()
 * @method Monsters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonstersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Monsters::class);
    }
}
