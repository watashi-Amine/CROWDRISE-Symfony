<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CtegorieEvenementController extends Controller
{
    
   
    
    
    
        public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('crowdBundle:CategorieEvenement')->findAll();
        
        return $this->render('crowdBundle:Evenement:choixCategorie.html.twig', array('categorie' => $categories));
    }
}
