<?php

namespace GM\ProjetBundle\Repository;

/**
 * DossierMissionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DossierMissionsRepository extends \Doctrine\ORM\EntityRepository
{
    
        public function getDossierMission($idProjet)
        {
          $qb = $this->createQueryBuilder('d');

          $qb->where('d.projet = :idProjet')
               ->setParameter('author', $idProjet)
             
          ;

          return $qb
            ->getQuery()
            ->getResult()
          ;
        }
}
