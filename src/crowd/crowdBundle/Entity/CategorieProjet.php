<?php

namespace crowd\crowdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProjet
 *
 * @ORM\Table(name="categorie_projet")
 * @ORM\Entity
 */
class CategorieProjet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIE_PROJET", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorieProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORIE", type="string", length=255, nullable=true)
     */
    private $categorie;



    /**
     * Get idCategorieProjet
     *
     * @return integer 
     */
    public function getIdCategorieProjet()
    {
        return $this->idCategorieProjet;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return CategorieProjet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    public function __toString() {
        return $this->categorie;
    }

    
    
}
