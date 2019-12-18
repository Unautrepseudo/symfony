<?php

namespace App\Repository;

use App\Entity\Bouquetin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Bouquetin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bouquetin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bouquetin[]    findAll()
 * @method Bouquetin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BouquetinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bouquetin::class);
    }

    // /**
    //  * @return Bouquetin[] Returns an array of Bouquetin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bouquetin
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
