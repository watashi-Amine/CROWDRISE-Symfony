<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestissementPE
 *
 * @ORM\Table(name="InvestissementPE")
 * @ORM\Entity
 */
class InvestissementPE {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    

    /**
     * @var \crowd\crowdBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;

   /**
     * @var int
     *
     * @ORM\Column(name="idprojet", type="integer", nullable=true)
     */
    private $idProjet;
    
   /**
     * @var int
     *
     * @ORM\Column(name="idevenement", type="integer", nullable=true)
     */
    private $idevenement;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="MONATANT", type="float", precision=10, scale=0, nullable=true)
     */
    private $monatant;

    function getId() {
        return $this->id;
    }

    function getIduser() {
        return $this->iduser;
    }

    function getIdProjet() {
        return $this->idProjet;
    }

    function getIdevenement() {
        return $this->idevenement;
    }

    function getMonatant() {
        return $this->monatant;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIduser(\crowd\crowdBundle\Entity\User $iduser) {
        $this->iduser = $iduser;
    }

    function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    function setIdevenement($idevenement) {
        $this->idevenement = $idevenement;
    }

    function setMonatant($monatant) {
        $this->monatant = $monatant;
    }

        
    
    
public function __toString()
{
    return $this->id;
}
}
