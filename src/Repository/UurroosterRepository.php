<?php

namespace App\Repository;

use App\Entity\Uurrooster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Uurrooster|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uurrooster|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uurrooster[]    findAll()
 * @method Uurrooster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UurroosterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Uurrooster::class);
    }

//    /**
//     * @return Uurrooster[] Returns an array of Uurrooster objects
//     */
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
    public function findOneBySomeField($value): ?Uurrooster
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
