<?php

namespace Proxies\__CG__\DatabaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OilCompany extends \DatabaseBundle\Entity\OilCompany implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'oilCompanyName', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'shortIntroduction', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'webSiteLink', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'investorsLink', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'pressClipPlatform', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'stakeholders', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'oilCompanyAliases', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'platforms', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'projects'];
        }

        return ['__isInitialized__', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'id', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'oilCompanyName', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'shortIntroduction', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'webSiteLink', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'investorsLink', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'pressClipPlatform', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'stakeholders', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'oilCompanyAliases', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'platforms', '' . "\0" . 'DatabaseBundle\\Entity\\OilCompany' . "\0" . 'projects'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OilCompany $proxy) {
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
    public function setOilCompanyName($oilCompanyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOilCompanyName', [$oilCompanyName]);

        return parent::setOilCompanyName($oilCompanyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getOilCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOilCompanyName', []);

        return parent::getOilCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortIntroduction($shortIntroduction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortIntroduction', [$shortIntroduction]);

        return parent::setShortIntroduction($shortIntroduction);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortIntroduction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortIntroduction', []);

        return parent::getShortIntroduction();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebSiteLink($webSiteLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebSiteLink', [$webSiteLink]);

        return parent::setWebSiteLink($webSiteLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebSiteLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebSiteLink', []);

        return parent::getWebSiteLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvestorsLink($investorsLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvestorsLink', [$investorsLink]);

        return parent::setInvestorsLink($investorsLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvestorsLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvestorsLink', []);

        return parent::getInvestorsLink();
    }

    /**
     * {@inheritDoc}
     */
    public function addPressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPressClipPlatform', [$pressClipPlatform]);

        return parent::addPressClipPlatform($pressClipPlatform);
    }

    /**
     * {@inheritDoc}
     */
    public function removePressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePressClipPlatform', [$pressClipPlatform]);

        return parent::removePressClipPlatform($pressClipPlatform);
    }

    /**
     * {@inheritDoc}
     */
    public function getPressClipPlatform()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPressClipPlatform', []);

        return parent::getPressClipPlatform();
    }

    /**
     * {@inheritDoc}
     */
    public function addStakeholder(\DatabaseBundle\Entity\Stakeholder $stakeholders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStakeholder', [$stakeholders]);

        return parent::addStakeholder($stakeholders);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStakeholder(\DatabaseBundle\Entity\Stakeholder $stakeholders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStakeholder', [$stakeholders]);

        return parent::removeStakeholder($stakeholders);
    }

    /**
     * {@inheritDoc}
     */
    public function getStakeholders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStakeholders', []);

        return parent::getStakeholders();
    }

    /**
     * {@inheritDoc}
     */
    public function addOilCompanyAlias(\DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOilCompanyAlias', [$oilCompanyAliases]);

        return parent::addOilCompanyAlias($oilCompanyAliases);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOilCompanyAlias(\DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOilCompanyAlias', [$oilCompanyAliases]);

        return parent::removeOilCompanyAlias($oilCompanyAliases);
    }

    /**
     * {@inheritDoc}
     */
    public function getOilCompanyAliases()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOilCompanyAliases', []);

        return parent::getOilCompanyAliases();
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

}