<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Probleme
 *
 * @ORM\Table(name="probleme")
 * @ORM\Entity
 */
class Probleme
{
    /**
     * @var \crowd\crowdBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProbleme", type="string", length=255, nullable=false)
     */
    private $nomprobleme;

    /**
     * @var string
     *
     * @ORM\Column(name="typeProbleme", type="string", length=255, nullable=false)
     */
    private $typeprobleme;

    /**
     * @var string
     *
     * @ORM\Column(name="competence", type="string", length=255, nullable=false)
     */
    private $competence;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="budjetP", type="float", precision=10, scale=0, nullable=true)
     */
    private $budjetP;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="datetime", nullable=true)
     */
    private $datepublication;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProbleme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprobleme;

    public function getId() {
        return $this->id;
    }

    public function getNomprobleme() {
        return $this->nomprobleme;
    }

    public function getTypeprobleme() {
        return $this->typeprobleme;
    }

    public function getCompetence() {
        return $this->competence;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getBudjetP() {
        return $this->budjetP;
    }

    public function getFichier() {
        return $this->fichier;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getDatepublication() {
        return $this->datepublication;
    }

    public function getIdprobleme() {
        return $this->idprobleme;
    }

    public function setId( $id) {
        $this->id = $id;
    }

    public function setNomprobleme($nomprobleme) {
        $this->nomprobleme = $nomprobleme;
    }

    public function setTypeprobleme($typeprobleme) {
        $this->typeprobleme = $typeprobleme;
    }

    public function setCompetence($competence) {
        $this->competence = $competence;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setBudget($budjetP) {
        $this->budjetP = $budjetP;
    }

    public function setFichier($fichier) {
        $this->fichier = $fichier;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setDatepublication($datepublication) {
        $this->datepublication = $datepublication;
    }

    public function setIdprobleme($idprobleme) {
        $this->idprobleme = $idprobleme;
    }

    public function __toString() {
        return $this->getNomprobleme();
    }

}
