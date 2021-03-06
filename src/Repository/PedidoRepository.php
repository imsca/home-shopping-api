<?php

namespace App\Repository;

use App\Entity\Pedido;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pedido|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pedido|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pedido[]    findAll()
 * @method Pedido[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PedidoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pedido::class);
    }
    public function findPedidos(int $id) {
        return $this->getEntityManager()->createQuery(
            "SELECT p.id, p.dataPedido, p.total, p.status
             FROM App\Entity\Pedido p
             JOIN p.consumidor c
             WHERE c.id = :id
             AND p.status = 0
             ORDER BY p.dataPedido DESC
             "
        )->setParameter('id', $id)
         ->execute();
    }

}
