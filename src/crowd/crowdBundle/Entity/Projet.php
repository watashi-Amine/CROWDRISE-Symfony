<?php

namespace crowd\crowdBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use FOS\CommentBundle\Entity\Comment as BaseComment;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="IDX_50159CA9F97A9A35", columns={"ID_TYPE"}), @ORM\Index(name="IDX_50159CA9F514AB27", columns={"ID_CATEGORIE_PROJET"}), @ORM\Index(name="IDX_50159CA95734C0BD", columns={"ID_INVESTISSEMENT"}), @ORM\Index(name="IDX_50159CA9BF396750", columns={"id"})})
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks 
 */
class Projet 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROJET", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    protected $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PROJET", type="string", length=255, nullable=true)
     */
    protected $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="RESUME", type="text", nullable=true)
     */
    protected $resume;
  

    /**
     * @var float
     *
     * @ORM\Column(name="BUDJET", type="float", precision=10, scale=0, nullable=true)
     */
    protected $budjet;
    /**
     * @var float
     *
     * @ORM\Column(name="argent", type="float", precision=10, scale=0, nullable=true)
     */
    protected $argent;
    /**
     * @var string
     * 
     * @ORM\Column(name="imageFile", type="text", nullable=true)
     * 
     */
    protected $imageFile;
    
    /**
     * @var string
     * @Vich\Uploadable
     * @ORM\Column(name="image", type="text", nullable=true)
     * @Assert\Image(maxSize="10000000")
     * @Vich\UploadableField(mapping="Projet_image", fileNameProperty="imageFile", nullable=true)
     */
    protected $image;
    /**
     * @var string
     * 
     * @ORM\Column(name="fichierFile", type="text", nullable=true)
     * 
     */
    protected $fichierFile;

    /**
     * @var string
     * @Vich\Uploadable
     * @ORM\Column(name="FICHIER", type="text", nullable=true)
     * @Assert\File(maxSize="10000000")
     * @Vich\UploadableField(mapping="Projet_file", fileNameProperty="fichierFile", nullable=true)
     */
    protected $fichier;

    /**
     * @var \crowd\crowdBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    protected $id;

    /**
     * @var \crowd\crowdBundle\Entity\Investissement
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\Investissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_INVESTISSEMENT", referencedColumnName="ID_INVESTISSEMENT")
     * })
     */
    protected $idInvestissement;

    /**
     * @var \crowd\crowdBundle\Entity\CategorieProjet
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\CategorieProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_PROJET", referencedColumnName="ID_CATEGORIE_PROJET")
     * })
     */
    protected $idCategorieProjet;

    /**
     * @var \crowd\crowdBundle\Entity\TypeProjet
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\TypeProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPE", referencedColumnName="ID_TYPE")
     * })
     */
    protected $idType;


    
    
    
    
    

    /**
     * Get idProjet
     *
     * @return integer 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set nomProjet
     *
     * @param string $nomProjet
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string 
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Projet
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Projet
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set budjet
     *
     * @param float $budjet
     * @return Projet
     */
    public function setBudjet($budjet)
    {
        $this->budjet = $budjet;

        return $this;
    }

    /**
     * Get budjet
     *
     * @return float 
     */
    public function getBudjet()
    {
        return $this->budjet;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     * @return Projet
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string 
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set id
     *
     * @param \crowd\crowdBundle\Entity\User $id
     * @return Projet
     */
    public function setId(\crowd\crowdBundle\Entity\User $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \crowd\crowdBundle\Entity\User 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idInvestissement
     *
     * @param \crowd\crowdBundle\Entity\Investissement $idInvestissement
     * @return Projet
     */
    public function setIdInvestissement(\crowd\crowdBundle\Entity\Investissement $idInvestissement = null)
    {
        $this->idInvestissement = $idInvestissement;

        return $this;
    }

    /**
     * Get idInvestissement
     *
     * @return \crowd\crowdBundle\Entity\Investissement 
     */
    public function getIdInvestissement()
    {
        return $this->idInvestissement;
    }

    /**
     * Set idCategorieProjet
     *
     * @param \crowd\crowdBundle\Entity\CategorieProjet $idCategorieProjet
     * @return Projet
     */
    public function setIdCategorieProjet(\crowd\crowdBundle\Entity\CategorieProjet $idCategorieProjet = null)
    {
        $this->idCategorieProjet = $idCategorieProjet;

        return $this;
    }

    /**
     * Get idCategorieProjet
     *
     * @return \crowd\crowdBundle\Entity\CategorieProjet 
     */
    public function getIdCategorieProjet()
    {
        return $this->idCategorieProjet;
    }

    /**
     * Set idType
     *
     * @param \crowd\crowdBundle\Entity\TypeProjet $idType
     * @return Projet
     */
    public function setIdType(\crowd\crowdBundle\Entity\TypeProjet $idType = null)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \crowd\crowdBundle\Entity\TypeProjet 
     */
    public function getIdType()
    {
        return $this->idType;
    }
    function getImageFile() {
        return $this->imageFile;
    }

    function setImageFile($imageFile) {
        $this->imageFile = $imageFile;
    }


    function getArgent() {
        return $this->argent;
    }

    function setArgent($argent) {
        $this->argent = $argent;
    }
    function getFichierFile() {
        return $this->fichierFile;
    }

    function setFichierFile($fichierFile) {
        $this->fichierFile = $fichierFile;
    }

public function __toString()
{
    return $this->nomProjet;
}
}
