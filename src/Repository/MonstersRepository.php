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
     * Affiche tous les monstres par leur flat stats
     *
     * @param [type] $idFlatsStats
     */
    public function searchMonstersByTypeOfMonsters($idFlatsStats)
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.idFlatStats', 'f_s')
            ->where("m.idFlatStats = :idFlatStats")
            ->setParameter('idFlatStats', $idFlatsStats)
            ->getQuery()
            ->execute();
    }

    /**
     * Affiche tous les monstres par élements
     *
     * @param [type] $idElements
     */
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
     * Affiche tous les monstres via les 3 premiers filtres
     *
     * @param int $idElements
     * @param int $idFlatsStats
     * @return Array
     */
    public function searchMonstersByThirdFilters($idElements, $idFlatStats, $idPreferedStats)
    {
        $filterByPreferedStats = ' SELECT m.monster, m.awake, m.type, m.ranking, ps.name AS "PREFEREDSTAT", et.name AS "ELEMENT" , (CASE id_prefered_stats WHEN '.$idPreferedStats.' THEN "stat_prefered" END ) FROM monsters m 
                                    LEFT JOIN element_type et ON et.id = m.id_element_type
                                    LEFT JOIN prefered_stats ps ON ps.id = m.id_prefered_stats
                                    WHERE id_element_type = '.$idElements.'
                                    AND id_flat_stats = '.$idFlatStats.'
                                    ORDER BY id_prefered_stats = '.$idPreferedStats.' DESC, ranking DESC';

        $stmt = $this->getEntityManager()->getConnection()->executeQuery($filterByPreferedStats);
        return $stmt->fetchAll();
    }

    /**
     * Affiches tous les monstres via les 3 premiers filtres + applique le ranking par filtres
     *
     * @param [type] $idElements
     * @param [type] $idFlatStats
     * @param [type] $idPreferedStats
     */
    public function searchMonstersBySubStatsFilters($idElements, $idFlatStats, $idPreferedStats)
    {
        if(empty($idElements) && empty($idFlatStats) && !empty($idPreferedStats)) {
            return $this->createQueryBuilder('m')
                ->leftJoin('m.idPreferedStats', 'ps')
                ->addSelect("CASE WHEN m.idPreferedStats = :idPreferedStats THEN 1 ELSE 0 END")
                ->orderBy("m.idPreferedStats", "DESC")
                ->orderBy("m.monster", "ASC")
                ->setParameter('idPreferedStats', $idPreferedStats)
                ->getQuery()
                ->execute();
        }

        if(empty($idElements) && !empty($idFlatStats) && !empty($idPreferedStats)) {
            return $this->createQueryBuilder('m')
                ->leftJoin('m.idFlatStats', 'fs')
                ->leftJoin('m.idPreferedStats', 'ps')
                ->addSelect("CASE WHEN m.idPreferedStats = :idPreferedStats THEN 1 ELSE 0 END")
                ->where("m.idFlatStats = :idFlatStats")
                ->orderBy("m.idPreferedStats", "DESC")
                ->setParameter('idFlatStats', $idFlatStats)
                ->setParameter('idPreferedStats', $idPreferedStats)
                ->getQuery()
                ->execute();
        }

        if(empty($idFlatStats)) {
            return $this->createQueryBuilder('m')
                ->leftJoin('m.idElementType', 'e_t')
                ->leftJoin('m.idPreferedStats', 'ps')
                ->addSelect("CASE WHEN m.idPreferedStats = :idPreferedStats THEN 1 ELSE 0 END")
                ->where("m.idElementType = :idElementType")
                ->orderBy("m.idPreferedStats", "DESC")
                ->orderBy("m.monster", "ASC")
                ->setParameter('idElementType', $idElements)
                ->setParameter('idPreferedStats', $idPreferedStats)
                ->getQuery()
                ->execute();
        }

        if(empty($idElements) && empty($idFlatStats) && !empty($idPreferedStats)) {
            return $this->createQueryBuilder('m')
                ->leftJoin('m.idPreferedStats', 'ps')
                ->addSelect("CASE WHEN m.idPreferedStats = :idPreferedStats THEN 1 ELSE 0 END")
                ->orderBy("m.idPreferedStats", "DESC")
                ->orderBy("m.monster", "ASC")
                ->setParameter('idPreferedStats', $idPreferedStats)
                ->getQuery()
                ->execute();
        }
        
        if(!empty($idElements) && !empty($idFlatStats) && !empty($idPreferedStats) ) {
            return $this->createQueryBuilder('m')
                ->leftJoin('m.idElementType', 'e_t')
                ->leftJoin('m.idPreferedStats', 'ps')
                ->addSelect("CASE WHEN m.idPreferedStats = :idPreferedStats THEN 1 ELSE 0 END")
                ->where("m.idElementType = :idElementType")
                ->andWhere("m.idFlatStats = :idFlatStats")
                ->orderBy("m.idPreferedStats", "DESC")
                ->setParameter('idElementType', $idElements)
                ->setParameter('idFlatStats', $idFlatStats)
                ->setParameter('idPreferedStats', $idPreferedStats)
                ->getQuery()
                ->execute();
        }
    }
}
