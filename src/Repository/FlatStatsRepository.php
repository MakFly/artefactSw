<?php

namespace App\Repository;

use App\Entity\FlatStats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FlatStats|null find($id, $lockMode = null, $lockVersion = null)
 * @method FlatStats|null findOneBy(array $criteria, array $orderBy = null)
 * @method FlatStats[]    findAll()
 * @method FlatStats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FlatStatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FlatStats::class);
    }
}
