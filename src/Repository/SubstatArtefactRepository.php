<?php

namespace App\Repository;

use App\Entity\SubstatArtefact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubstatArtefact|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubstatArtefact|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubstatArtefact[]    findAll()
 * @method SubstatArtefact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubstatArtefactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubstatArtefact::class);
    }

    // /**
    //  * @return SubstatArtefact[] Returns an array of SubstatArtefact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubstatArtefact
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
