<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use crowd\crowdBundle\Entity\Solution;
use crowd\crowdBundle\Form\SolutionType;

/**
 * Solution controller.
 *
 */
class SolutionController extends Controller
{

    /**
     * Lists all Solution entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:Solution')->findAll();

        return $this->render('crowdBundle:Solution:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function solByidPAction($idP)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:Solution')->findByidprobleme($idP);

        return $this->render('crowdBundle:Probleme:solutionlisteparprob.html.twig', array(
            'sols' => $entities,
        ));
    }
    public function ajoutAction($id){
    $request=  $this->get('request');
        
    $ent = new Solution();
    $ent->setId($request->get(1));
    $ent->setIdprobleme($id);
    
    
    
    $ent->setBudjets(floatval($request->get('budjetS')));
    $ent->setDescription($request->get('description'));
    $ent->setDatePub(new \Datetime());
    $ent->setDateDepot(new \DateTime($request->get('dateDepot')));

    
    $em=$this->getDoctrine()->getManager();
    $em->persist($ent);
    $em->flush();
        /* @var $n type */
       $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Probleme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Probleme entity.');
        }

     
        return $this->render('crowdBundle:Probleme:show.html.twig', array(
            'entity'      => $entity,
            
        ));
}
    /**
     * Creates a new Solution entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Solution();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('solution_show', array('id' => $entity->getId())));
        }

        return $this->render('crowdBundle:Solution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Solution entity.
     *
     * @param Solution $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Solution $entity)
    {
        $form = $this->createForm(new SolutionType(), $entity, array(
            'action' => $this->generateUrl('solution_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Solution entity.
     *
     */
    public function newAction()
    {
        $entity = new Solution();
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:Solution:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Solution entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Solution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:Solution:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Solution entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Solution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solution entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('crowdBundle:Solution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Solution entity.
    *
    * @param Solution $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Solution $entity)
    {
        $form = $this->createForm(new SolutionType(), $entity, array(
            'action' => $this->generateUrl('solution_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Solution entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Solution')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solution entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('solution_edit', array('id' => $id)));
        }

        return $this->render('crowdBundle:Solution:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Solution entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('crowdBundle:Solution')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Solution entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('solution'));
    }

    /**
     * Creates a form to delete a Solution entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('solution_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
