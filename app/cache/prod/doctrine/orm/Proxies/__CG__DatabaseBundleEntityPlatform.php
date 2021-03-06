<?php

namespace Proxies\__CG__\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Platform extends \DatabaseBundle\Entity\Platform implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformName', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'longitude', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'latitude', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'helideckDValue', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'helideckTValue', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformDate', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformRemovalDate', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'nearestBaseDistance', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'coastDistance', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'bunkedBedNumber', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'refuellingOption', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'circuit', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'field', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'block', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'sea', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'basin', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'country', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'base', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'oilCompany', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformStatus'];
        }

        return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformName', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'longitude', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'latitude', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'helideckDValue', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'helideckTValue', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformDate', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformRemovalDate', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'nearestBaseDistance', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'coastDistance', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'bunkedBedNumber', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'refuellingOption', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'circuit', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'field', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'block', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'sea', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'basin', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'country', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'base', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'oilCompany', '' . "\0" . 'DatabaseBundle\\Entity\\Platform' . "\0" . 'platformStatus'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Platform $proxy) {
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
    public function setPlatformName($platformName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlatformName', [$platformName]);

        return parent::setPlatformName($platformName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatformName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatformName', []);

        return parent::getPlatformName();
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
    public function setHelideckDValue($helideckDValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHelideckDValue', [$helideckDValue]);

        return parent::setHelideckDValue($helideckDValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getHelideckDValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHelideckDValue', []);

        return parent::getHelideckDValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setHelideckTValue($helideckTValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHelideckTValue', [$helideckTValue]);

        return parent::setHelideckTValue($helideckTValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getHelideckTValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHelideckTValue', []);

        return parent::getHelideckTValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlatformDate($platformDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlatformDate', [$platformDate]);

        return parent::setPlatformDate($platformDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatformDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatformDate', []);

        return parent::getPlatformDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNearestBaseDistance($nearestBaseDistance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNearestBaseDistance', [$nearestBaseDistance]);

        return parent::setNearestBaseDistance($nearestBaseDistance);
    }

    /**
     * {@inheritDoc}
     */
    public function getNearestBaseDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNearestBaseDistance', []);

        return parent::getNearestBaseDistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoastDistance($coastDistance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoastDistance', [$coastDistance]);

        return parent::setCoastDistance($coastDistance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoastDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoastDistance', []);

        return parent::getCoastDistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setBunkedBedNumber($bunkedBedNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBunkedBedNumber', [$bunkedBedNumber]);

        return parent::setBunkedBedNumber($bunkedBedNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getBunkedBedNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBunkedBedNumber', []);

        return parent::getBunkedBedNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefuellingOption($refuellingOption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefuellingOption', [$refuellingOption]);

        return parent::setRefuellingOption($refuellingOption);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefuellingOption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefuellingOption', []);

        return parent::getRefuellingOption();
    }

    /**
     * {@inheritDoc}
     */
    public function addCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCircuit', [$circuit]);

        return parent::addCircuit($circuit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCircuit', [$circuit]);

        return parent::removeCircuit($circuit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCircuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCircuit', []);

        return parent::getCircuit();
    }

    /**
     * {@inheritDoc}
     */
    public function setField(\DatabaseBundle\Entity\Field $field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setField', [$field]);

        return parent::setField($field);
    }

    /**
     * {@inheritDoc}
     */
    public function getField()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getField', []);

        return parent::getField();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock(\DatabaseBundle\Entity\Block $block)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlock', [$block]);

        return parent::setBlock($block);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlock', []);

        return parent::getBlock();
    }

    /**
     * {@inheritDoc}
     */
    public function setSea(\DatabaseBundle\Entity\Sea $sea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSea', [$sea]);

        return parent::setSea($sea);
    }

    /**
     * {@inheritDoc}
     */
    public function getSea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSea', []);

        return parent::getSea();
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
    public function setBase(\DatabaseBundle\Entity\Base $base)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBase', [$base]);

        return parent::setBase($base);
    }

    /**
     * {@inheritDoc}
     */
    public function getBase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBase', []);

        return parent::getBase();
    }

    /**
     * {@inheritDoc}
     */
    public function setOilCompany(\DatabaseBundle\Entity\OilCompany $oilCompany)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOilCompany', [$oilCompany]);

        return parent::setOilCompany($oilCompany);
    }

    /**
     * {@inheritDoc}
     */
    public function getOilCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOilCompany', []);

        return parent::getOilCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlatformStatus(\DatabaseBundle\Entity\PlatformStatus $platformStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlatformStatus', [$platformStatus]);

        return parent::setPlatformStatus($platformStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatformStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatformStatus', []);

        return parent::getPlatformStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlatformRemovalDate($platformRemovalDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlatformRemovalDate', [$platformRemovalDate]);

        return parent::setPlatformRemovalDate($platformRemovalDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlatformRemovalDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlatformRemovalDate', []);

        return parent::getPlatformRemovalDate();
    }

}
