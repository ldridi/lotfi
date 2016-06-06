<?php

namespace Administration\AdministrationBundle\Repository;

/**
 * VisiteArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VisiteArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function findNbrVisite($article) {

        return $this->createQueryBuilder('p')


            ->select('COUNT(p)')
            ->where('p.article =:id')
            ->setParameter('id', $article)
            ->getQuery()

            ->getSingleScalarResult();

    }
}