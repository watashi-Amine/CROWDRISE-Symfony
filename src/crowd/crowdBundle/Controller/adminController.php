<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use crowd\crowdBundle\Entity\User;
use crowd\crowdBundle\Form\UserType;
use Ob\HighchartsBundle\Highcharts\Highchart;



class adminController extends Controller
{
    public function adminAction()
    {
        return $this->render('crowdBundle:admin:admin.html.twig');
    }
   
      public function afficher_All_UserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:User')->findAll();
$msg="tous les utilisateur";
        return $this->render('crowdBundle:admin:afficher_All_User.html.twig', array(
            'entities' => $entities,'msg'=>$msg,
        ));
    }
    
    public function edit_profileAction($id){
     
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:admin:edit_profile.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
     private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
      public function rechercheAction(){
  $form=$this->createForm(new \crowd\crowdBundle\Form\rechercheAdminType());
        return $this->render('crowdBundle:admin:recherche.html.twig',array('form'=>$form->createView()));
    }
    public function rechercheUserTraitementAction(){
          $form=$this->createForm(new \crowd\crowdBundle\Form\rechercheAdminType());

        if($this->get('request')->getMethod()=="POST"){
            $form->bind($this->get('request'));
      
        
        }
               $em = $this->getDoctrine()->getManager();

                $entities = $em->getRepository('crowdBundle:User')->recherche($form['recherche']->getData());

   
        return $this->render('crowdBundle:admin:afficher_All_User.html.twig', array(
            'entities' => $entities,
        ));     
    }
    
    
    //afficher tous les projet
           public function afficher_all_projetAction()
    {
    $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('crowdBundle:Projet')->findAll();
        return $this->render('crowdBundle:admin:afficher_all_projet.html.twig', array(
            'projets' => $projets));
    }
    
    
            public function block_userAction($id)
    {
    $em = $this->container->get('doctrine')->getEntityManager();
        $entities = $em->getRepository('crowdBundle:User')->findBy(
  array('id' => $id)
);
       
        
 
 
  $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id'=>$id));
        $user->setEnabled(false);
        $userManager->updateUser($user);
      //  var_dump($user);
        // Changing the role of the user
      //  $user->setRoles(array($selectedUser['role']));
        // Updating the user
        //
 
        $msg="compte desactiver !";
         return $this->render('crowdBundle:admin:afficher_All_User.html.twig', array(
            'entities' => $entities,'msg'=>$msg,
        ));
    }
       public function statistique_ProjetAction()
            
           
{
        
        //----------calcul 35-->46
                
        
        $Web_Design = adminController::calcul(35);
        $Web_Developpement = adminController::calcul(36);
        $Sport = adminController::calcul(37);
        $Nature_et_envirenement = adminController::calcul(38);
        $reparation_informatique = adminController::calcul(39);
        $Mobile_Developement = adminController::calcul(40);
        $Bricolage = adminController::calcul(41);

        $nouvelle_technologie = adminController::calcul(42);
        $Divertissement = adminController::calcul(43);
        $humanitaire = adminController::calcul(43);

        //  var_dump($resultCount);
  
        //*****************

    // Chart
  $sellsHistory = array(
            array(
                 "name" => "nombre de projet",
                 "data" => array($Web_Design,$Web_Developpement,$Sport,$Nature_et_envirenement,$reparation_informatique, $Mobile_Developement,$Bricolage,$nouvelle_technologie,$Divertissement,$humanitaire)
            ),
           
        );

        $dates = array(
            "Web Design", "Web Developpement", "Sport", "Nature et envirenement", "reparation  informatique", "Mobile Developement", "Bricolage","nouvelle technologie","Divertissement","humanitaire"
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('barchart');
        $ob->title->text('Nombre de projet par catégorie');
        $ob->chart->type('column');

        $ob->yAxis->title(array('text' => "Nombre de projet Publier par "));

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);

    return $this->render('crowdBundle:admin:statistique_projet.html.twig', array(
        'chart' => $ob
    ));
}


public function calcul($idprojt){
    
    
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('crowdBundle:Projet');
        $query = $repository->createQueryBuilder('u');
        $query->select('u')
                ->where('u.idCategorieProjet= :id' )
                  ->setParameter('id', $idprojt)
        ;
        $result = $query->getQuery()->getResult();

        $resultCount = count($result);
        
        return $resultCount;
}
}
