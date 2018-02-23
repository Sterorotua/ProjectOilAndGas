<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Base
 *
 * @ORM\Table(name="base")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\BaseRepository")
 */
class Base
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
     * @ORM\Column(name="baseName", type="string", length=255)
     */
    private $baseName;

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
     * @ORM\Column(name="elevation", type="float", nullable=true)
     */
    private $elevation;
    
    /**
     * @var String
     * 
     * @ORM\Column(name="airportLink", type="string", length=255, nullable=true)
     */
    private $airportLink;
    
    /**
     * @var String
     * 
     * @ORM\Column(name="iataCode", type="string", length=5, nullable=true)
     */
    private $iataCode;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Basin", inversedBy="bases")
     * @ORM\JoinColumn(nullable=true)
     */
    private $basin;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Platform", mappedBy="base", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $platforms;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Project", mappedBy="base", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $projects;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country", inversedBy="bases")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperatorGroup", inversedBy="bases")
     * @ORM\JoinColumn(nullable=true)
     */
    private $operatorGroup;
    
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
     * Set baseName
     *
     * @param string $baseName
     * @return Base
     */
    public function setBaseName($baseName)
    {
        $this->baseName = $baseName;

        return $this;
    }

    /**
     * Get baseName
     *
     * @return string 
     */
    public function getBaseName()
    {
        return $this->baseName;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Base
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
     * @return Base
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
     * Set basin
     *
     * @param \DatabaseBundle\Entity\Basin $basin
     * @return Base
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
     * Constructor
     */
    public function __construct()
    {
        $this->platforms = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platforms
     * @return Base
     */
    public function addPlatform(\DatabaseBundle\Entity\Platform $platforms)
    {
        $this->platforms[] = $platforms;
        $platforms->setBase($this);

        return $this;
    }

    /**
     * Remove platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platforms
     */
    public function removePlatform(\DatabaseBundle\Entity\Platform $platforms)
    {
        $this->platforms->removeElement($platforms);
    }

    /**
     * Get platforms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }

    /**
     * Add projects
     *
     * @param \DatabaseBundle\Entity\Project $projects
     * @return Base
     */
    public function addProject(\DatabaseBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
        $projects->setBase($this);

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \DatabaseBundle\Entity\Project $projects
     */
    public function removeProject(\DatabaseBundle\Entity\Project $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     *
     * @return Base
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
     * Set operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     *
     * @return Base
     */
    public function setOperatorGroup(\DatabaseBundle\Entity\OperatorGroup $operatorGroup = null)
    {
        $this->operatorGroup = $operatorGroup;

        return $this;
    }

    /**
     * Get operatorGroup
     *
     * @return \DatabaseBundle\Entity\OperatorGroup
     */
    public function getOperatorGroup()
    {
        return $this->operatorGroup;
    }

    /**
     * Set elevation
     *
     * @param float $elevation
     *
     * @return Base
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get elevation
     *
     * @return float
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Set airportLink
     *
     * @param string $airportLink
     *
     * @return Base
     */
    public function setAirportLink($airportLink)
    {
        $this->airportLink = $airportLink;

        return $this;
    }

    /**
     * Get airportLink
     *
     * @return string
     */
    public function getAirportLink()
    {
        return $this->airportLink;
    }

    /**
     * Set iataCode
     *
     * @param string $iataCode
     *
     * @return Base
     */
    public function setIataCode($iataCode)
    {
        $this->iataCode = $iataCode;

        return $this;
    }

    /**
     * Get iataCode
     *
     * @return string
     */
    public function getIataCode()
    {
        return $this->iataCode;
    }
}
