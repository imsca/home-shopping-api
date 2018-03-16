<?php

namespace App\Repository;

use App\Entity\FormaPagamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormaPagamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormaPagamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormaPagamento[]    findAll()
 * @method FormaPagamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormaPagamentoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormaPagamento::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.something = :value')->setParameter('value', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
