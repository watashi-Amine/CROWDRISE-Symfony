<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competencefreelancer
 *
 * @ORM\Table(name="competencefreelancer")
 * @ORM\Entity
 */
class Competencefreelancer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
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
     * @ORM\Column(name="competence", type="string", length=255, nullable=false)
     */
    private $competence;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCompetence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetence;

    public function getId() {
        return $this->id;
    }

    public function getIdprobleme() {
        return $this->idprobleme;
    }

    public function getCompetence() {
        return $this->competence;
    }

    public function getIdcompetence() {
        return $this->idcompetence;
    }

    public function setId( $id) {
        $this->id = $id;
    }

    public function setIdprobleme($idprobleme) {
        $this->idprobleme = $idprobleme;
    }

    public function setCompetence($competence) {
        $this->competence = $competence;
    }

    public function setIdcompetence($idcompetence) {
        $this->idcompetence = $idcompetence;
    }

    public function __toString() {
        return $this->getCompetence();
    }

}
