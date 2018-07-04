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
    public function findUser($user) {
        return $this->getEntityManager()->createQuery(
            'SELECT c
             FROM App\Entity\Consumidor c
             INNER JOIN c.usuario u
             WHERE u.login = :login
             AND u.senha = :senha
             ORDER BY c.id
             '
        )->setParameter('login', $user->login)
         ->setParameter('senha', $user->senha)
         ->setMaxResults(1)
         ->getResult();
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
