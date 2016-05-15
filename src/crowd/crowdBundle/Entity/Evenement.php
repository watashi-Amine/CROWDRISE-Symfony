<?php

namespace crowd\crowdBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="FK_RELATIONSHIP_13", columns={"id"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"ID_INVESTISSEMENT"}), @ORM\Index(name="FK_RELATIONSHIP_16", columns={"ID_CATEGORIE_EVENEMENT"})})
 * @ORM\Entity
 */
class Evenement 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EVENEMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEBUT", type="datetime", nullable=true)
     */
    protected $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    protected $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    protected $description;
     /**
     * @var string
     *
     * @ORM\Column(name="nomEv", type="text", nullable=true)
     */
    protected $nomEvenement;

    /**
     * @var \crowd\crowdBundle\Entity\CategorieEvenement
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\CategorieEvenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_EVENEMENT", referencedColumnName="ID_CATEGORIE_EVENEMENT")
     * })
     */
    protected $idCategorieEvenement;

    /**
     * @var \crowd\crowdBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="crowd\crowdBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
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
     * Get idEvenement
     *
     * @return integer 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idCategorieEvenement
     *
     * @param \crowd\crowdBundle\Entity\CategorieEvenement $idCategorieEvenement
     * @return Evenement
     */
    public function setIdCategorieEvenement(\crowd\crowdBundle\Entity\CategorieEvenement $idCategorieEvenement = null)
    {
        $this->idCategorieEvenement = $idCategorieEvenement;

        return $this;
    }

    /**
     * Get idCategorieEvenement
     *
     * @return \crowd\crowdBundle\Entity\CategorieEvenement 
     */
    public function getIdCategorieEvenement()
    {
        return $this->idCategorieEvenement;
    }

    /**
     * Set id
     *
     * @param \crowd\crowdBundle\Entity\User $id
     * @return Evenement
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
     * @return Evenement
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
    public function getNomEvenement() {
        return $this->nomEvenement;
    }

    public function setNomEvenement($nomEvenement) {
        $this->nomEvenement = $nomEvenement;
    }
    
    
     /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=true)
     */
    private $longitude;
    
    function getLongitude() {
        return $this->longitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

        /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=true)
     */
    private $latitude;
    function getLatitude() {
        return $this->latitude;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }
    function setIdEvenement($idEvenement) {
        $this->idEvenement = $idEvenement;
    }

            
        public function __toString() {
      //  return $this->getIdEvenement()+"";
        return $this->nomEvenement;
        
    }

}
