<?php

namespace App\Repository;

use App\Entity\Prendre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Prendre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prendre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prendre[]    findAll()
 * @method Prendre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrendreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prendre::class);
    }

    // /**
    //  * @return Prendre[] Returns an array of Prendre objects
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
    public function findOneBySomeField($value): ?Prendre
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
