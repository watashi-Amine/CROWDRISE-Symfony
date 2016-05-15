<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieReclamation
 *
 * @ORM\Table(name="categorie_reclamation")
 * @ORM\Entity
 */
class CategorieReclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIE_RECLAMATION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorieReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    private $contenu;

    
    function getIdCategorieReclamation() {
        return $this->idCategorieReclamation;
    }

    function getContenu() {
        return $this->contenu;
    }

    function setIdCategorieReclamation($idCategorieReclamation) {
        $this->idCategorieReclamation = $idCategorieReclamation;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

        
    public function __toString() {
        return $this ->getContenu() ;
    }

}
