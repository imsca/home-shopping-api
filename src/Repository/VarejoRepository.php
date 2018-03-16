<?php

namespace App\Repository;

use App\Entity\Varejo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Varejo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Varejo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Varejo[]    findAll()
 * @method Varejo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VarejoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Varejo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('v')
            ->where('v.something = :value')->setParameter('value', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
