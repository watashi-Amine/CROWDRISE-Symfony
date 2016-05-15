<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetencefreelancerController extends Controller
{
    
   
    
    
    
        public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $comp = $em->getRepository('crowdBundle:Competencefreelancer')->findAll();
        
        return $this->render('crowdBundle:Probleme:choixCompetence.html.twig', array('competence' => $comp));
    }
}
