<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CtegorieprojetController extends Controller
{
    
   
    
    
    
        public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('crowdBundle:CategorieProjet')->findAll();
        
        return $this->render('crowdBundle:Projet:menuCat.html.twig', array('categories' => $categories));
    }
}
