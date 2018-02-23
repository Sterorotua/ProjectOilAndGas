<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Platform
 *
 * @ORM\Table(name="platform")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\PlatformRepository")
 */
class Platform
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="platformName", type="string", length=255)
     */
    private $platformName;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="helideckDValue", type="float")
     */
    private $helideckDValue;

    /**
     * @var float
     *
     * @ORM\Column(name="helideckTValue", type="float")
     */
    private $helideckTValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="platformDate", type="datetime", nullable=true)
     */
    private $platformDate;
    
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="platformRemovalDate", type="datetime", nullable=true) 
     */
    private $platformRemovalDate;

    /**
     * @var float
     *
     * @ORM\Column(name="nearestBaseDistance", type="float")
     */
    private $nearestBaseDistance;

    /**
     * @var float
     *
     * @ORM\Column(name="coastDistance", type="float")
     */
    private $coastDistance;

    /**
     * @var int
     *
     * @ORM\Column(name="bunkedBedNumber", type="integer", nullable=true)
     */
    private $bunkedBedNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="refuellingOption", type="boolean")
     */
    private $refuellingOption;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\ProjectCircuit", mappedBy="platform", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $circuit;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Field")
     * @ORM\JoinColumn(nullable=true)
     */
    private $field;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Block")
     * @ORM\JoinColumn(nullable=true)
     */
    private $block;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Sea")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sea;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Basin", inversedBy="platforms")
     * @ORM\JoinColumn(nullable=true)
     */
    private $basin;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country", inversedBy="platforms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Base", inversedBy="platforms")
     * @ORM\JoinColumn(nullable=true)
     */
    private $base;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OilCompany", inversedBy="platforms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $oilCompany;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\PlatformStatus")
     * @ORM\JoinColumn(nullable=true)
     */
    private $platformStatus;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set platformName
     *
     * @param string $platformName
     * @return Platform
     */
    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;

        return $this;
    }

    /**
     * Get platformName
     *
     * @return string 
     */
    public function getPlatformName()
    {
        return $this->platformName;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Platform
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Platform
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set helideckDValue
     *
     * @param float $helideckDValue
     * @return Platform
     */
    public function setHelideckDValue($helideckDValue)
    {
        $this->helideckDValue = $helideckDValue;

        return $this;
    }

    /**
     * Get helideckDValue
     *
     * @return float 
     */
    public function getHelideckDValue()
    {
        return $this->helideckDValue;
    }

    /**
     * Set helideckTValue
     *
     * @param float $helideckTValue
     * @return Platform
     */
    public function setHelideckTValue($helideckTValue)
    {
        $this->helideckTValue = $helideckTValue;

        return $this;
    }

    /**
     * Get helideckTValue
     *
     * @return float 
     */
    public function getHelideckTValue()
    {
        return $this->helideckTValue;
    }

    /**
     * Set platformDate
     *
     * @param \DateTime $platformDate
     * @return Platform
     */
    public function setPlatformDate($platformDate)
    {
        $this->platformDate = $platformDate;

        return $this;
    }

    /**
     * Get platformDate
     *
     * @return \DateTime 
     */
    public function getPlatformDate()
    {
        return $this->platformDate;
    }

    /**
     * Set nearestBaseDistance
     *
     * @param float $nearestBaseDistance
     * @return Platform
     */
    public function setNearestBaseDistance($nearestBaseDistance)
    {
        $this->nearestBaseDistance = $nearestBaseDistance;

        return $this;
    }

    /**
     * Get nearestBaseDistance
     *
     * @return float 
     */
    public function getNearestBaseDistance()
    {
        return $this->nearestBaseDistance;
    }

    /**
     * Set coastDistance
     *
     * @param float $coastDistance
     * @return Platform
     */
    public function setCoastDistance($coastDistance)
    {
        $this->coastDistance = $coastDistance;

        return $this;
    }

    /**
     * Get coastDistance
     *
     * @return float 
     */
    public function getCoastDistance()
    {
        return $this->coastDistance;
    }

    /**
     * Set bunkedBedNumber
     *
     * @param integer $bunkedBedNumber
     * @return Platform
     */
    public function setBunkedBedNumber($bunkedBedNumber)
    {
        $this->bunkedBedNumber = $bunkedBedNumber;

        return $this;
    }

    /**
     * Get bunkedBedNumber
     *
     * @return integer 
     */
    public function getBunkedBedNumber()
    {
        return $this->bunkedBedNumber;
    }

    /**
     * Set refuellingOption
     *
     * @param boolean $refuellingOption
     * @return Platform
     */
    public function setRefuellingOption($refuellingOption)
    {
        $this->refuellingOption = $refuellingOption;

        return $this;
    }

    /**
     * Get refuellingOption
     *
     * @return boolean 
     */
    public function getRefuellingOption()
    {
        return $this->refuellingOption;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->circuit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add circuit
     *
     * @param \DatabaseBundle\Entity\ProjectCircuit $circuit
     * @return Platform
     */
    public function addCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {
        $this->circuit[] = $circuit;
        $circuit->setPlatform($this);

        return $this;
    }

    /**
     * Remove circuit
     *
     * @param \DatabaseBundle\Entity\ProjectCircuit $circuit
     */
    public function removeCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {
        $this->circuit->removeElement($circuit);
    }

    /**
     * Get circuit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set field
     *
     * @param \DatabaseBundle\Entity\Field $field
     * @return Platform
     */
    public function setField(\DatabaseBundle\Entity\Field $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return \DatabaseBundle\Entity\Field 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set block
     *
     * @param \DatabaseBundle\Entity\Block $block
     * @return Platform
     */
    public function setBlock(\DatabaseBundle\Entity\Block $block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return \DatabaseBundle\Entity\Block 
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set sea
     *
     * @param \DatabaseBundle\Entity\Sea $sea
     * @return Platform
     */
    public function setSea(\DatabaseBundle\Entity\Sea $sea)
    {
        $this->sea = $sea;

        return $this;
    }

    /**
     * Get sea
     *
     * @return \DatabaseBundle\Entity\Sea 
     */
    public function getSea()
    {
        return $this->sea;
    }

    /**
     * Set basin
     *
     * @param \DatabaseBundle\Entity\Basin $basin
     * @return Platform
     */
    public function setBasin(\DatabaseBundle\Entity\Basin $basin)
    {
        $this->basin = $basin;

        return $this;
    }

    /**
     * Get basin
     *
     * @return \DatabaseBundle\Entity\Basin 
     */
    public function getBasin()
    {
        return $this->basin;
    }

    /**
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     * @return Platform
     */
    public function setCountry(\DatabaseBundle\Entity\Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \DatabaseBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set base
     *
     * @param \DatabaseBundle\Entity\Base $base
     * @return Platform
     */
    public function setBase(\DatabaseBundle\Entity\Base $base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \DatabaseBundle\Entity\Base 
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set oilCompany
     *
     * @param \DatabaseBundle\Entity\oilCompany $oilCompany
     * @return Platform
     */
    public function setOilCompany(\DatabaseBundle\Entity\oilCompany $oilCompany)
    {
        $this->oilCompany = $oilCompany;

        return $this;
    }

    /**
     * Get oilCompany
     *
     * @return \DatabaseBundle\Entity\oilCompany 
     */
    public function getOilCompany()
    {
        return $this->oilCompany;
    }

    /**
     * Set platformStatus
     *
     * @param \DatabaseBundle\Entity\PlatformStatus $platformStatus
     *
     * @return Platform
     */
    public function setPlatformStatus(\DatabaseBundle\Entity\PlatformStatus $platformStatus)
    {
        $this->platformStatus = $platformStatus;

        return $this;
    }

    /**
     * Get platformStatus
     *
     * @return \DatabaseBundle\Entity\PlatformStatus
     */
    public function getPlatformStatus()
    {
        return $this->platformStatus;
    }

    /**
     * Set platformRemovalDate
     *
     * @param \DateTime $platformRemovalDate
     *
     * @return Platform
     */
    public function setPlatformRemovalDate($platformRemovalDate)
    {
        $this->platformRemovalDate = $platformRemovalDate;

        return $this;
    }

    /**
     * Get platformRemovalDate
     *
     * @return \DateTime
     */
    public function getPlatformRemovalDate()
    {
        return $this->platformRemovalDate;
    }
}
