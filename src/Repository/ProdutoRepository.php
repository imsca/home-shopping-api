<?php

namespace App\Repository;

use App\Entity\Produto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Produto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produto[]    findAll()
 * @method Produto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdutoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Produto::class);
    }

    
    public function findProducts(int $id) {
        return $this->getEntityManager()->createQuery(
            'SELECT p.id, p.nome, p.quantidade, p.preco, p.imagem, p.marca, p.categoria, v.id as varejo
             FROM App\Entity\Produto p
             INNER JOIN p.varejo v
             WHERE p.varejo = :id
             ORDER BY p.nome ASC'
        )->setParameter('id', $id)
         ->execute();
    }
    
}
