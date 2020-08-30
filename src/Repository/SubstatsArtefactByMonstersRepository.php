<?php

namespace App\Repository;

use App\Entity\Monsters;
use App\Entity\SubstatsArtefactByMonsters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubstatsArtefactByMonsters|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubstatsArtefactByMonsters|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubstatsArtefactByMonsters[]    findAll()
 * @method SubstatsArtefactByMonsters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubstatsArtefactByMonstersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubstatsArtefactByMonsters::class);
    }

    public function findEntitiesByIdMonsters($id_monsters){
        return $this->createQueryBuilder('s')
                    ->where('s.idMonsters = :id_monsters')
                    ->setParameter("id_monsters", $id_monsters)
                    ->getQuery()
                    ->getResult();
    }

    // /**
    //  * @return SubstatsArtefactByMonsters[] Returns an array of SubstatsArtefactByMonsters objects
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
    public function findOneBySomeField($value): ?SubstatsArtefactByMonsters
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
