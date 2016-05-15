<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use crowd\crowdBundle\Entity\InvestissementPE;
use crowd\crowdBundle\Form\InvestissementPEType;

/**
 * InvestissementPE controller.
 *
 */
class InvestissementPEController extends Controller
{

    /**
     * Lists all InvestissementPE entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:InvestissementPE')->findAll();

        return $this->render('crowdBundle:InvestissementPE:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new InvestissementPE entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new InvestissementPE();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('investissementpe_show', array('id' => $entity->getId())));
        }

        return $this->render('crowdBundle:InvestissementPE:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a InvestissementPE entity.
     *
     * @param InvestissementPE $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(InvestissementPE $entity)
    {
        $form = $this->createForm(new InvestissementPEType(), $entity, array(
            'action' => $this->generateUrl('investissementpe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new InvestissementPE entity.
     *
     */
    public function newAction()
    {
        $entity = new InvestissementPE();
        
            
$user = $this->get('security.token_storage')->getToken()->getUser();
//$userId = $user->getId();
        $entity->setIduser($user);
 
      
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:InvestissementPE:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a InvestissementPE entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:InvestissementPE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InvestissementPE entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:InvestissementPE:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing InvestissementPE entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:InvestissementPE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InvestissementPE entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:InvestissementPE:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a InvestissementPE entity.
    *
    * @param InvestissementPE $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(InvestissementPE $entity)
    {
        $form = $this->createForm(new InvestissementPEType(), $entity, array(
            'action' => $this->generateUrl('investissementpe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing InvestissementPE entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:InvestissementPE')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find InvestissementPE entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('investissementpe_edit', array('id' => $id)));
        }

        return $this->render('crowdBundle:InvestissementPE:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a InvestissementPE entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('crowdBundle:InvestissementPE')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find InvestissementPE entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('investissementpe'));
    }

    /**
     * Creates a form to delete a InvestissementPE entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('investissementpe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
    
    public function financerProjetAction($idp){
        
  
        $entity = new InvestissementPE();
        
            
$user = $this->get('security.token_storage')->getToken()->getUser();
//$userId = $user->getId();
        $entity->setIduser($user);
        $entity->setIdProjet($idp);
        
        
 
      
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:InvestissementPE:financer.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    
      public function financerEvenementAction($idE){
        
  
        $entity = new InvestissementPE();
        
            
$user = $this->get('security.token_storage')->getToken()->getUser();
//$userId = $user->getId();
        $entity->setIduser($user);
        
        $entity->setIdevenement($idE);
        
 
      
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:InvestissementPE:financer.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
 
    
    
    
    
}
