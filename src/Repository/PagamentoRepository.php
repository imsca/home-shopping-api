<?php

namespace App\Repository;

use App\Entity\Pagamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pagamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pagamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pagamento[]    findAll()
 * @method Pagamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagamentoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pagamento::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
