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
    public function findItensPedido(int $id) {
        return $this->getEntityManager()->createQuery(
            "SELECT item_pedido.id, 
                    item_pedido.quantidade,
                    item_pedido.valor preco,
                    produto.imagem,
                    produto.id,
                    produto.nome
             FROM App\Entity\ItemPedido item_pedido
             INNER JOIN item_pedido.produto produto
             INNER JOIN item_pedido.pedido pedido
             WHERE pedido.id = :id
             AND pedido.status = 0
             "
        )->setParameter('id', $id)
         ->execute();
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
