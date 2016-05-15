<?php

namespace crowd\crowdBundle\Repository;
use Doctrine\ORM\EntityRepository;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRepository
 *
 * @author ASR1
 */
class UserRepository extends EntityRepository{
    //put your code here
    
    
    public function recherche($chaine){
        
        $qb=  $this->createQueryBuilder('u')
                
                ->select('u')
                ->where('u.username like :chaine')
                ->orderBy('u.id')
                ->setParameter('chaine', $chaine);
        return $qb->getQuery()->getResult();
        
                
    }
}
