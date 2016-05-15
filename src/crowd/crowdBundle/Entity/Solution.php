<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 *
 * @ORM\Table(name="solution")
 * @ORM\Entity
 */
class Solution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProbleme", type="integer", nullable=false)
     */
    private $idprobleme;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=true)
     */
    private $duree;

    /**
     * @var float
     *
     * @ORM\Column(name="budjetS", type="float", precision=10, scale=0, nullable=true)
     */
    private $budjetS;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePub", type="datetime", nullable=true)
     */
    private $datePub;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepot", type="datetime", nullable=true)
     */
    private $dateDepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSolution", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolution;
    public function getDatePub() {
        return $this->datePub;
    }

    public function getDateDepot() {
        return $this->dateDepot;
    }

    public function setDatePub(\DateTime $datePub) {
        $this->datePub = $datePub;
    }

    public function setDateDepot(\DateTime $dateDepot) {
        $this->dateDepot = $dateDepot;
    }

        public function getId() {
        return $this->id;
    }

    public function getIdprobleme() {
        return $this->idprobleme;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getFichier() {
        return $this->fichier;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getBudjets() {
        return $this->budjetS;
    }

    public function getIdsolution() {
        return $this->idsolution;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdprobleme($idprobleme) {
        $this->idprobleme = $idprobleme;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setFichier($fichier) {
        $this->fichier = $fichier;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setBudjets($budjetS) {
        $this->budjetS = $budjetS;
    }

    public function setIdsolution($idsolution) {
        $this->idsolution = $idsolution;
    }

    public function __toString() {
        return $this->getDescription();
        
    }

}
