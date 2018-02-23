<?php

namespace Proxies\__CG__\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProjectArea extends \DatabaseBundle\Entity\ProjectArea implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'projectAreaLatitude', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'projectAreaLongitude', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'missionAreas'];
        }

        return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'projectAreaLatitude', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'projectAreaLongitude', '' . "\0" . 'DatabaseBundle\\Entity\\ProjectArea' . "\0" . 'missionAreas'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProjectArea $proxy) {
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
    public function setProjectAreaLatitude($projectAreaLatitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectAreaLatitude', [$projectAreaLatitude]);

        return parent::setProjectAreaLatitude($projectAreaLatitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectAreaLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectAreaLatitude', []);

        return parent::getProjectAreaLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjectAreaLongitude($projectAreaLongitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectAreaLongitude', [$projectAreaLongitude]);

        return parent::setProjectAreaLongitude($projectAreaLongitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectAreaLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectAreaLongitude', []);

        return parent::getProjectAreaLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function addMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMissionArea', [$missionArea]);

        return parent::addMissionArea($missionArea);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMissionArea', [$missionArea]);

        return parent::removeMissionArea($missionArea);
    }

    /**
     * {@inheritDoc}
     */
    public function getMissionAreas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMissionAreas', []);

        return parent::getMissionAreas();
    }

}
