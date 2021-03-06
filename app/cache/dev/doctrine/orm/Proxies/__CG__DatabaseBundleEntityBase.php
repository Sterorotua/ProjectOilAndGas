<?php

namespace Proxies\__CG__\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Base extends \DatabaseBundle\Entity\Base implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'baseName', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'longitude', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'latitude', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'elevation', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'airportLink', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'iataCode', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'basin', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'platforms', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'projects', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'country', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'operatorGroup'];
        }

        return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'baseName', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'longitude', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'latitude', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'elevation', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'airportLink', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'iataCode', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'basin', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'platforms', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'projects', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'country', '' . "\0" . 'DatabaseBundle\\Entity\\Base' . "\0" . 'operatorGroup'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Base $proxy) {
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
    public function setBaseName($baseName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaseName', [$baseName]);

        return parent::setBaseName($baseName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseName', []);

        return parent::getBaseName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setBasin(\DatabaseBundle\Entity\Basin $basin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasin', [$basin]);

        return parent::setBasin($basin);
    }

    /**
     * {@inheritDoc}
     */
    public function getBasin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBasin', []);

        return parent::getBasin();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlatform(\DatabaseBundle\Entity\Platform $platforms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlatform', [$platforms]);

        return parent::addPlatform($platforms);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlatform(\DatabaseBundle\Entity\Platform $platforms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlatform', [$platforms]);

        return parent::removePlatform($platforms);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatforms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatforms', []);

        return parent::getPlatforms();
    }

    /**
     * {@inheritDoc}
     */
    public function addProject(\DatabaseBundle\Entity\Project $projects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProject', [$projects]);

        return parent::addProject($projects);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProject(\DatabaseBundle\Entity\Project $projects)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProject', [$projects]);

        return parent::removeProject($projects);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjects()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjects', []);

        return parent::getProjects();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(\DatabaseBundle\Entity\Country $country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setOperatorGroup(\DatabaseBundle\Entity\OperatorGroup $operatorGroup = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperatorGroup', [$operatorGroup]);

        return parent::setOperatorGroup($operatorGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getOperatorGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperatorGroup', []);

        return parent::getOperatorGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setElevation($elevation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElevation', [$elevation]);

        return parent::setElevation($elevation);
    }

    /**
     * {@inheritDoc}
     */
    public function getElevation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElevation', []);

        return parent::getElevation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAirportLink($airportLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAirportLink', [$airportLink]);

        return parent::setAirportLink($airportLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getAirportLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAirportLink', []);

        return parent::getAirportLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setIataCode($iataCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIataCode', [$iataCode]);

        return parent::setIataCode($iataCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getIataCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIataCode', []);

        return parent::getIataCode();
    }

}
