<?php

namespace App\Repository;

use App\Entity\PreferedStats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PreferedStats|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferedStats|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferedStats[]    findAll()
 * @method PreferedStats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferedStatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PreferedStats::class);
    }

    // /**
    //  * @return PreferedStats[] Returns an array of PreferedStats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PreferedStats
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
