<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use crowd\crowdBundle\Entity\Evenement;
use crowd\crowdBundle\Form\EvenementType;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Services\Geocoding\Geocoder ;

/**
 * Evenement controller.
 *
 */
class EvenementController extends Controller
{

    /**
     * Lists all Evenement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('crowdBundle:Evenement')->findAll();

        return $this->render('crowdBundle:Evenement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
     public function catAction($cat)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('crowdBundle:Evenement')->findByidCategorieEvenement($cat);
        
       return $this->render('crowdBundle:Evenement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Evenement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Evenement();
        
         $user = $this->get('security.context')->getToken()->getUser();
 $entity->setId($user);
$form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_show', array('id' => $entity->getIdEvenement())));
        }

        return $this->render('crowdBundle:Evenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Evenement entity.
     *
     * @param Evenement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Evenement $entity)
    {
        $form = $this->createForm(new EvenementType(), $entity, array(
            'action' => $this->generateUrl('evenement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Evenement entity.
     *
     */
    public function newAction()
    {
        $entity = new Evenement();
        $form   = $this->createCreateForm($entity);

        return $this->render('crowdBundle:Evenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Evenement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('crowdBundle:Evenement');
        $query = $repository->createQueryBuilder('u');
        $query->select('u')
                ->where('u.idEvenement= :id' )
                  ->setParameter('id', $id)
        ;
        $result = $query->getQuery()->getResult();
$long=$result[0]->getLongitude();

$lat=$result[0]->getLatitude();

//$lat=$result->getLatitude();
       // $resultCount = count($result);

        
        
        $deleteForm = $this->createDeleteForm($id);
        
       
        $map = new Map();

        $map->setCenter($lat, $long, true);
        $map->setMapOption('zoom', 13);
        $map->setLanguage('fr');

        $marker = new Marker();

        // Configure your marker options
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition($lat, $long, true);
        $marker->setAnimation(Animation::BOUNCE);
      

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => false,
            'flat'      => true,
        ));

        $map->addMarker($marker);

        return $this->render('crowdBundle:Evenement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'map'   =>  $map,
        ));
    }

    /**
     * Displays a form to edit an existing Evenement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
 
        return $this->render('crowdBundle:Evenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
           
        ));
    }

    /**
    * Creates a form to edit a Evenement entity.
    *
    * @param Evenement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Evenement $entity)
    {
        $form = $this->createForm(new EvenementType(), $entity, array(
            'action' => $this->generateUrl('evenement_update', array('id' => $entity->getIdEvenement())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Evenement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('crowdBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_show', array('id' => $id)));
        }

        return $this->render('crowdBundle:Evenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Evenement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('crowdBundle:Evenement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evenement'));
    }

    /**
     * Creates a form to delete a Evenement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evenement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
