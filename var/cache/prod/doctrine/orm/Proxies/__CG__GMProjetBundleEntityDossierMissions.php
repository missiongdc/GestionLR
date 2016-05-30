<?php

namespace Proxies\__CG__\GM\ProjetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DossierMissions extends \GM\ProjetBundle\Entity\DossierMissions implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'id', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'projet', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'collaborateur', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'candidature', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'dateDepart', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'duree', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'ville', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'visa', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'hotel'];
        }

        return ['__isInitialized__', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'id', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'projet', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'collaborateur', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'candidature', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'dateDepart', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'duree', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'ville', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'visa', '' . "\0" . 'GM\\ProjetBundle\\Entity\\DossierMissions' . "\0" . 'hotel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DossierMissions $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCandidature($candidature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCandidature', [$candidature]);

        return parent::setCandidature($candidature);
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidature', []);

        return parent::getCandidature();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart($dateDepart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', [$dateDepart]);

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', []);

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', [$duree]);

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', []);

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisa($visa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisa', [$visa]);

        return parent::setVisa($visa);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisa', []);

        return parent::getVisa();
    }

    /**
     * {@inheritDoc}
     */
    public function setHotel($hotel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHotel', [$hotel]);

        return parent::setHotel($hotel);
    }

    /**
     * {@inheritDoc}
     */
    public function getHotel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHotel', []);

        return parent::getHotel();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjet(\GM\ProjetBundle\Entity\Projet $projet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjet', [$projet]);

        return parent::setProjet($projet);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjet', []);

        return parent::getProjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollaborateur(\GM\ProjetBundle\Entity\Collaborateur $collaborateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollaborateur', [$collaborateur]);

        return parent::setCollaborateur($collaborateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCollaborateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollaborateur', []);

        return parent::getCollaborateur();
    }

}
