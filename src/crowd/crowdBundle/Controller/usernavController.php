<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class usernavController extends Controller{

    
     public function indexAction()
    {
        return $this->render('crowdBundle:user:index.html.twig', array('name' => $name));
    }
     public function projetAceuilAction()
    {
        return $this->render('crowdBundle:user:projet.html.twig');
    }
    public function modifierProfileAction()
    {
        return $this->render('crowdBundle:user:modifierProfile.html.twig');
    }
    
    
    public function profile_infoAction(){
        
        return $this->render('crowdBundle:user:profile_info.html.twig');
        
    }
    
    
     public function afficherProjetAction(){
        
        return $this->render('crowdBundle:navigation:afficherProjet.html.twig');
        
    }
}
