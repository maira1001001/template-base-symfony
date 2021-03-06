<?php

namespace AppBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    function searchByFullname($search) {
        return $this->createQueryBuilder('product')
                    ->select('product.id, product.name, product.price, product.stock')
                    ->where('product.name LIKE :name')
                    ->setParameter('name', '%'.$search.'%')
                    ->getQuery()
                    ->getResult();
    }

    function searchByCodebar($search) {
        return $this->createQueryBuilder('product')
                    ->select('product.id, product.name, product.price, product.stock')
                    ->where('product.codebar LIKE :codebar')
                    ->setParameter('codebar', '%'.$search.'%')
                    ->getQuery()
                    ->getResult();
    }    
}
