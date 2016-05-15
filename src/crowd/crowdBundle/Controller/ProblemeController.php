<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use crowd\crowdBundle\Form\rechercheComType;

use crowd\crowdBundle\Entity\Probleme;
use crowd\crowdBundle\Form\ProblemeType;

/**
 * Probleme controller.
 *
 */
class ProblemeController extends Controller
{

    /**
     * Lists all Probleme entities.
     *
     */
  public function indexAction(Request $request)
    {
       // $this->listAction($request);
        $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT p FROM crowdBundle:Probleme p";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        4/*limit per page*/
    );
    return $this->render('crowdBundle:Probleme:finalListes.html.twig', array('pagination' => $pagination));
      
    }
    /**
     * Creates a new Probleme entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Probleme();
         $user = $this->get('security.context')->getToken()->getUser();
 $entity->setId($user);
$form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('probleme_show', array('id' => $entity->getIdprobleme())));
        }

        return $this->render('crowdBundle:Probleme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Probleme entity.
     *
     * @param Probleme $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Probleme $entity)
    {
        $form = $this->createForm(new ProblemeType(), $entity, array(
            'action' => $this->generateUrl('probleme_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Probleme entity.
     *
     */
    public function newAction()
    {
        $entity = new Probleme();
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:Probleme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
     public function new2Action()
    {
         return $this->render('crowdBundle:Probleme:newfree.html.twig', array(
         
        ));
    }

    /**
     * Finds and displays a Probleme entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Probleme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Probleme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $request = $this->getRequest();
         $contentId = (int)$request->request->get('contentId');
        $score = (float)$request->request->get('score');

       // $starrating = $this->get('ideato_starrating_service');
       // $average = $starrating->save( $contentId, $score );

        $response = new Response();
       //  $response->setContent($average);
       //  $starrating = $this->get('ideato_starrating_service');
      //  $average = $starrating->getAverage( $contentId );
        return $this->render('crowdBundle:Probleme:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
           // 'contentId' => $contentId,
             //   'score' => $average,
        ));
    }
    /**
     * Displays a form to edit an existing Probleme entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Probleme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Probleme entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:Probleme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Probleme entity.
    *
    * @param Probleme $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Probleme $entity)
    {
        $form = $this->createForm(new ProblemeType(), $entity, array(
            'action' => $this->generateUrl('probleme_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Probleme entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Probleme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Probleme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('probleme_edit', array('id' => $id)));
        }

        return $this->render('crowdBundle:Probleme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Probleme entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('crowdBundle:Probleme')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Probleme entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('probleme'));
    }

    /**
     * Creates a form to delete a Probleme entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('probleme_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
      
           public function rechercheCompAction()
    {
         $form = $this->createForm(new rechercheComType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
             $chaine=   $form['recherche']->getData();
            $em = $this->getDoctrine()->getManager();
//                    $entities = $em->getRepository('crowdBundle:Projet')->findBynomProjet($chaine);



$repository = $em->getRepository('crowdBundle:Probleme') ;
            
                   $query =  $repository->createQueryBuilder('u');
//                   
                    $query ->select('u') 
                            ->where('u.competence like :chaine ')
                    ->orderBy('u.idprobleme')                  
                    ->setParameter('chaine', '%'.$chaine.'%' );
              $entities  =$query->getQuery()->getResult();

        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        
        
       return $this->render('crowdBundle:Probleme:finalListes.html.twig', array(
            'pagination' => $entities,
        ));
    }
    
          public function rechercheAction()
    {
              
       $form = $this->createForm(new rechercheType());
        return $this->render('crowdBundle:Probleme:choixCompetence.html.twig', array('form' => $form->createView()));
    }
    

public function ajoutAction(){
    $request=  $this->get('request');
        $user = $this->get('security.context')->getToken()->getUser();


    $entity = new Probleme();
    //$entity->setId($request->get('id'));
     $entity->setId($user);
    $entity->setNomprobleme($request->get('nomprobleme'));
    $entity->setBudget(floatval($request->get('budget')));
    $entity->setCompetence(implode("/",$request->get('competence')));
    $entity->setDescription($request->get('description'));
    $entity->setDatepublication(new \Datetime());
    $entity->setFichier($request->get('fichier'));
    $entity->setDuree($request->get('duree'));
    $entity->setTypeprobleme($request->get('typeprobleme'));
    
    $em=$this->getDoctrine()->getManager();
    $em->persist($entity);
    $em->flush();
        /* @var $n type */
//        $query = $em->createQuery('SELECT idprobleme  FROM crowd\crowdBundle\Entity\Probleme p  where p.nomProbleme='.$n);
//        $prob = $query->getResult();
//    $deleteForm = $this->createDeleteForm($prob->getIdprobleme());
//    $editForm = $this->createEditForm($prob);

     return $this->render('crowdBundle:Probleme:show.html.twig',array(
         'entity'      => $entity,
//        'edit_form'   => $editForm->createView(),
//       'delete_form'   => $deleteForm->createView(),


     ));
}
public function comAction($com)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('crowdBundle:Probleme')->findByidprobleme();
        
       return $this->render('crowdBundle:Probleme:finalListes.html.twig', array(
            'pagination' => $entities,
        ));
    }
   
    
    public function typeAction($type)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('crowdBundle:Probleme')->findBytypeprobleme($type);
        
       return $this->render('crowdBundle:Probleme:finalListes.html.twig', array(
            'pagination' => $entities,
        ));
    }
}
