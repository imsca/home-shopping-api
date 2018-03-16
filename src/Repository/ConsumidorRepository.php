<?php

namespace App\Repository;

use App\Entity\Consumidor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Consumidor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Consumidor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Consumidor[]    findAll()
 * @method Consumidor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsumidorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Consumidor::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
