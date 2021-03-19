<?php

namespace App\Repository;

use App\Entity\Useer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Useer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Useer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Useer[]    findAll()
 * @method Useer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UseerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Useer::class);
    }

    // /**
    //  * @return Useer[] Returns an array of Useer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Useer
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
