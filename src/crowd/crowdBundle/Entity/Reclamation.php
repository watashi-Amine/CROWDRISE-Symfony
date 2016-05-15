<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="FK_RELATIONSHIP_17", columns={"ID_CATEGORIE_RECLAMATION"}), @ORM\Index(name="FK_RELATIONSHIP_18", columns={"id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RECLAMATION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=255, nullable=true)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    public $contenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NOTIFICATION", type="boolean", nullable=true)
     */
    public $notification;

    /**
     * @var \crowd\crowdBundle\Entity\CategorieReclamation
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\CategorieReclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_RECLAMATION", referencedColumnName="ID_CATEGORIE_RECLAMATION")
     * })
     */
    public $idCategorieReclamation;

    /**
     * @var \crowd\crowdBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    public $idUser;

    function getIdReclamation() {
        return $this->idReclamation;
    }

    function getTitre() {
        return $this->titre;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getNotification() {
        return $this->notification;
    }

    function getIdCategorieReclamation() {
        return $this->idCategorieReclamation;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdReclamation($idReclamation) {
        $this->idReclamation = $idReclamation;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setNotification($notification) {
        $this->notification = $notification;
    }

    function setIdCategorieReclamation(\crowd\crowdBundle\Entity\CategorieReclamation $idCategorieReclamation) {
        $this->idCategorieReclamation = $idCategorieReclamation;
    }

    function setIdUser(\crowd\crowdBundle\Entity\User $idUser) {
        $this->idUser = $idUser;
    }


}
