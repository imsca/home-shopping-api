<?php

namespace App\Repository;

use App\Entity\ItemPedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ItemPedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemPedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemPedido[]    findAll()
 * @method ItemPedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemPedidoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ItemPedido::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('i')
            ->where('i.something = :value')->setParameter('value', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
