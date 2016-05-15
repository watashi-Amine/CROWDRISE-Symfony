<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('crowdBundle:Default:index.html.twig', array('name' => $name));
    }
     public function navigationAction()
    {
        return $this->render('crowdBundle:Default:navigation.html.twig');
    }
}
