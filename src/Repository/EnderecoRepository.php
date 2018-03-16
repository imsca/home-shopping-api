<?php

namespace App\Repository;

use App\Entity\Endereco;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Endereco|null find($id, $lockMode = null, $lockVersion = null)
 * @method Endereco|null findOneBy(array $criteria, array $orderBy = null)
 * @method Endereco[]    findAll()
 * @method Endereco[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnderecoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Endereco::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('e')
            ->where('e.something = :value')->setParameter('value', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
