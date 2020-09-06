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

    /**
     *
     * @param int $idElements
     * @param int $idSubsStats
     * 
     * Request for 1 results with 2 select value option send to request DQL
     */
    public function searchMonstersBySubsStats($idElements, $idSubstatsArtefactByMonsters)
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.idElementType', 'e_t')
            ->leftJoin('m.idSubstatsArtefactByMonsters', 's')
            ->where("m.idElementType = :idElementType")
            ->andWhere("m.idSubstatsArtefactByMonsters = :idSubstatsArtefactByMonsters")
            ->setParameter('idElementType', $idElements)
            ->setParameter('idSubstatsArtefactByMonsters', $idSubstatsArtefactByMonsters)
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
            ->setMaxResults(15)
            ->orderBy("m.ranking", "DESC")
            ->getQuery()
            ->execute();
    }
}
