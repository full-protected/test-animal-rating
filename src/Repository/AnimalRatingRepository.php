<?php

namespace App\Repository;

use App\Entity\AnimalRating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnimalRating>
 */
class AnimalRatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnimalRating::class);
    }

    public function getAnimalStats(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.animalName, COUNT(a.id) as count, AVG(a.score) as avgScore')
            ->groupBy('a.animalName')
            ->orderBy('count', 'DESC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return AnimalRating[] Returns an array of AnimalRating objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AnimalRating
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
