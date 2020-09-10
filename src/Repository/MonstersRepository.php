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

    public function searchMonstersByTypeOfMonsters($idFlatsStats)
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.idFlatStats', 'f_s')
            ->where("m.idFlatStats = :idFlatStats")
            ->setParameter('idFlatStats', $idFlatsStats)
            ->getQuery()
            ->execute();
    }

    public function searchMonstersByElementsOfMonsters($idElements)
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.idElementType', 'e_t')
            ->where("m.idElementType = :idElementType")
            ->setParameter('idElementType', $idElements)
            ->getQuery()
            ->execute();
    }

    /**
     * Undocumented function
     *
     * @param int $idElements
     * @param int $idFlatsStats
     * @return Array
     */
    public function searchMonstersByFilters($idElements, $idFlatStats)
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.idElementType', 'e_t')
            ->leftJoin('m.idFlatStats', 'f_s')
            ->where("m.idElementType = :idElementType")
            ->andWhere("m.idFlatStats = :idFlatStats")
            ->setParameter('idElementType', $idElements)
            ->setParameter('idFlatStats', $idFlatStats)
            ->getQuery()
            ->execute();
    }
}
