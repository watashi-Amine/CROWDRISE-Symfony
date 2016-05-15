<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use crowd\crowdBundle\Entity\Projet;
use crowd\crowdBundle\Form\ProjetType;
use crowd\crowdBundle\Form\rechercheType;
/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{

    /**
     * Lists all Projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:Projet')->findAll();
        
          $entity = new Projet();
          
         $prc= ($entity->getArgent()+ $entity->getBudjet())*100;

        return $this->render('crowdBundle:navigation:afficherprojet.html.twig', array(
            'entities' => $entities,'prc' =>$prc,
        ));
    }
    
    
    
        public function afficherAction()
    {
    $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('crowdBundle:Projet')->findAll();
        return $this->render('crowdBundle:Projet:index1.html.twig', array(
            'projets' => $projets));
    }
    /**
     * Creates a new Projet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Projet();
        $user = $this->get('security.context')->getToken()->getUser();
$userId = $user->getId();

       //$iduser  =  $this->container->get('security.context')->getToken()->getUser()
        
       // $entity->setBody("Hello word");
        $entity->setArgent(0);
      $entity->setId($userId);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projet_show', array('id' => $entity->getIdProjet())));
        }

        return $this->render('crowdBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            
        ));
    }

    /**
     * Creates a form to create a Projet entity.
     *
     * @param Projet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Projet $entity)
    {
        
        $form = $this->createForm(new ProjetType(), $entity, array(
            'action' => $this->generateUrl('projet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projet entity.
     *
     */
    public function newAction()
    {
        $entity = new Projet();
       
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            
        ));
    }

    /**
     * Finds and displays a Projet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:Projet:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('crowdBundle:Projet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Projet entity.
    *
    * @param Projet $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projet $entity)
    {
        $form = $this->createForm(new ProjetType(), $entity, array(
            'action' => $this->generateUrl('projet_update', array('id' => $entity->getIdProjet())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projet_edit', array('id' => $id)));
        }

        return $this->render('crowdBundle:Projet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Projet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('crowdBundle:Projet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projet'));
    }

    /**
     * Creates a form to delete a Projet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer','attr' => array('class' => 'btn-u')))
            ->getForm()
        ;
    }
    
    
        
    
         public function catAction($cat)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('crowdBundle:Projet')->findByidCategorieProjet($cat);
        
       return $this->render('crowdBundle:navigation:afficherProjet.html.twig', array(
            'entities' => $entities,
        ));
    }
    
           public function rechercheTraiAction()
    {
         $form = $this->createForm(new rechercheType());
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->bind($this->get('request'));
             $chaine=   $form['recherche']->getData();
            $em = $this->getDoctrine()->getManager();
//                    $entities = $em->getRepository('crowdBundle:Projet')->findBynomProjet($chaine);



$repository = $em->getRepository('crowdBundle:Projet') ;
            
                   $query =  $repository->createQueryBuilder('u');
//                   
                    $query ->select('u') 
                            ->where('u.nomProjet like :chaine ')
                    ->orderBy('u.idProjet')                  
                    ->setParameter('chaine', '%'.$chaine.'%' );
              $entities  =$query->getQuery()->getResult();

        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
        
       return $this->render('crowdBundle:navigation:afficherProjet.html.twig', array(
            'entities' => $entities,
        ));
    }
    
          public function rechercheAction()
    {
              
       $form = $this->createForm(new RechercheType());
        return $this->render('crowdBundle:Projet:recherche.html.twig', array('form' => $form->createView()));
    }
    
    
       public function indexownerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $userManager = $this->container->get('fos_user.user_manager');
$user = $userManager->findUserByUsername($this->container->get('security.context')
                    ->getToken()
                    ->getUser());
$idowner = $user->getid();

     $repository = $em->getRepository('crowdBundle:Projet') ;
            
                   $query =  $repository->createQueryBuilder('u');
//                   
                    $query ->select('u') 
                            ->where('u.id = :idowner ')
                    ->orderBy('u.idProjet')                  
                    ->setParameter('idowner', $idowner );
              $entities  =$query->getQuery()->getResult();
        
          

        return $this->render('crowdBundle:user:mon_projet.html.twig', array(
            'entities' => $entities,
        ));
    }
}
