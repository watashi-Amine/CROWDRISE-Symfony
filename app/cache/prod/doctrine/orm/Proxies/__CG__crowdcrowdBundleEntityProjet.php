<?php

namespace Proxies\__CG__\crowd\crowdBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Projet extends \crowd\crowdBundle\Entity\Projet implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'idProjet', 'nomProjet', 'resume', 'budjet', 'argent', 'imageFile', 'image', 'fichierFile', 'fichier', 'id', 'idInvestissement', 'idCategorieProjet', 'idType');
        }

        return array('__isInitialized__', 'idProjet', 'nomProjet', 'resume', 'budjet', 'argent', 'imageFile', 'image', 'fichierFile', 'fichier', 'id', 'idInvestissement', 'idCategorieProjet', 'idType');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Projet $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdProjet()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdProjet();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProjet', array());

        return parent::getIdProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomProjet($nomProjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomProjet', array($nomProjet));

        return parent::setNomProjet($nomProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomProjet', array());

        return parent::getNomProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setResume($resume)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResume', array($resume));

        return parent::setResume($resume);
    }

    /**
     * {@inheritDoc}
     */
    public function getResume()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResume', array());

        return parent::getResume();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBudjet($budjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBudjet', array($budjet));

        return parent::setBudjet($budjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getBudjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBudjet', array());

        return parent::getBudjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichier($fichier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichier', array($fichier));

        return parent::setFichier($fichier);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichier', array());

        return parent::getFichier();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(\crowd\crowdBundle\Entity\User $id = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdInvestissement(\crowd\crowdBundle\Entity\Investissement $idInvestissement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdInvestissement', array($idInvestissement));

        return parent::setIdInvestissement($idInvestissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdInvestissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdInvestissement', array());

        return parent::getIdInvestissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCategorieProjet(\crowd\crowdBundle\Entity\CategorieProjet $idCategorieProjet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategorieProjet', array($idCategorieProjet));

        return parent::setIdCategorieProjet($idCategorieProjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategorieProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategorieProjet', array());

        return parent::getIdCategorieProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdType(\crowd\crowdBundle\Entity\TypeProjet $idType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdType', array($idType));

        return parent::setIdType($idType);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdType', array());

        return parent::getIdType();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', array());

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile($imageFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', array($imageFile));

        return parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getArgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArgent', array());

        return parent::getArgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setArgent($argent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArgent', array($argent));

        return parent::setArgent($argent);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichierFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichierFile', array());

        return parent::getFichierFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichierFile($fichierFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichierFile', array($fichierFile));

        return parent::setFichierFile($fichierFile);
    }

}
