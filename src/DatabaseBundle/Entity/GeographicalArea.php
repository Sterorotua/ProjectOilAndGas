<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeographicalArea
 *
 * @ORM\Table(name="geographical_area")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\GeographicalAreaRepository")
 */
class GeographicalArea
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
     * @ORM\Column(name="geographicalAreaName", type="string", length=255)
     */
    private $geographicalAreaName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="geographicalAreaCode", type="string", length=2)
     */
    private $geographicalAreaCode;

    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Country", mappedBy="geographicalArea", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $countries;

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
     * Set geographicalAreaName
     *
     * @param string $geographicalAreaName
     * @return GeographicalArea
     */
    public function setGeographicalAreaName($geographicalAreaName)
    {
        $this->geographicalAreaName = $geographicalAreaName;

        return $this;
    }

    /**
     * Get geographicalAreaName
     *
     * @return string 
     */
    public function getGeographicalAreaName()
    {
        return $this->geographicalAreaName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add countries
     *
     * @param \DatabaseBundle\Entity\Country $country
     * @return GeographicalArea
     */
    public function addCountry(\DatabaseBundle\Entity\Country $country)
    {
        $this->countries[] = $country;
        $country->setGeographicalArea($this);

        return $this;
    }

    /**
     * Remove countries
     *
     * @param \DatabaseBundle\Entity\Country $country
     */
    public function removeCountry(\DatabaseBundle\Entity\Country $country)
    {
        $this->countries->removeElement($country);
    }

    /**
     * Get countries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set geographicalAreaCode
     *
     * @param string $geographicalAreaCode
     *
     * @return GeographicalArea
     */
    public function setGeographicalAreaCode($geographicalAreaCode)
    {
        $this->geographicalAreaCode = $geographicalAreaCode;

        return $this;
    }

    /**
     * Get geographicalAreaCode
     *
     * @return string
     */
    public function getGeographicalAreaCode()
    {
        return $this->geographicalAreaCode;
    }
}
