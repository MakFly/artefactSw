<?php

namespace App\Repository;

use App\Entity\ElementType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ElementType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElementType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElementType[]    findAll()
 * @method ElementType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElementTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElementType::class);
    }
}
