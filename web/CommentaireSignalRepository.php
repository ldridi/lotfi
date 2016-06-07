<?php

namespace Administration\AdministrationBundle\Repository;

/**
 * CommentaireSignalRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireSignalRepository extends \Doctrine\ORM\EntityRepository
{

    public function getNbNotificationAdmin() {

        return $this->createQueryBuilder('p')


            ->select('COUNT(p)')
            ->getQuery()

            ->getSingleScalarResult();

    }
    
    public function getNbNotificationUser($user) {

        return $this->createQueryBuilder('p')

            ->join('p.signalRecette','f')->select('f')
            ->join('f.recette','j')->select('j')
            ->where('j.auteur =:id')
            ->andWhere('p.vueCommentaireSignal like :string')
            ->select('COUNT(p)')
            ->setParameter('id', $user)
            ->setParameter('string', 'non')
            ->getQuery()

            ->getSingleScalarResult();

    }

    public function getNbAdmin() {

        return $this->createQueryBuilder('p')

            ->select('COUNT(p)')

            ->getQuery()

            ->getSingleScalarResult();

    }

    public function getNb($user) {

        return $this->createQueryBuilder('p')

            ->join('p.signalRecette','f')->select('f')
            ->join('f.recette','j')->select('j')
            ->where('j.auteur =:id')
            ->select('COUNT(p)')
            ->setParameter('id', $user)

            ->getQuery()

            ->getSingleScalarResult();

    }

    public function findByUser($id){
        $req = $this->createQueryBuilder('p')

            ->join('p.signalRecette','f')->select('f')
            ->join('f.recette','j')->select('j')
            ->where('j.auteur =:id')
            ->select('p')
            ->orderBy('p.dateCommentaireSignal','ASC')

            ->setParameter('id', $id);
        return $req->getQuery()->getResult();
    }
}
