<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\CountryRepository")
 */

class Country
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
     * @ORM\Column(name="countryName", type="string", length=255)
     */
    private $countryName;

    /**
     * @var string
     *
     * @ORM\Column(name="organisationLink", type="string", length=255, nullable=true)
     */
    private $organisationLink;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="countryCode", type="string", length=3)
     */
    private $countryCode;
    
    /**
     * @var string
     *
     * @ORM\Column(name="countryFullName", type="string", length=255)
     */
    private $countryFullName;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\PressClipPlatform", mappedBy="country", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $pressClipPlatform;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Stakeholder", mappedBy="country", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stakeholders;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\GeographicalArea", inversedBy="countries")
     * @ORM\JoinColumn(nullable=false)
     */
    private $geographicalArea;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Platform", mappedBy="country", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $platforms;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\CountryArea", mappedBy="country", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $countryArea;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Base", mappedBy="country", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $bases;

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
     * Set countryName
     *
     * @param string $countryName
     * @return Country
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * Get countryName
     *
     * @return string 
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set organisationLink
     *
     * @param string $organisationLink
     * @return Country
     */
    public function setOrganisationLink($organisationLink)
    {
        $this->organisationLink = $organisationLink;

        return $this;
    }

    /**
     * Get organisationLink
     *
     * @return string 
     */
    public function getOrganisationLink()
    {
        return $this->organisationLink;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pressClipPlatform = new \Doctrine\Common\Collections\ArrayCollection();
        $this->aircraftFleet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platforms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pressClipPlatform
     *
     * @param \DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform
     * @return Country
     */
    public function addPressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {
        $this->pressClipPlatform[] = $pressClipPlatform;
        $pressClipPlatform->setCountry($this);

        return $this;
    }

    /**
     * Remove pressClipPlatform
     *
     * @param \DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform
     */
    public function removePressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {
        $this->pressClipPlatform->removeElement($pressClipPlatform);
    }

    /**
     * Get pressClipPlatform
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPressClipPlatform()
    {
        return $this->pressClipPlatform;
    }

    /**
     * Add stakeholders
     *
     * @param \DatabaseBundle\Entity\Stakeholder $stakeholders
     * @return Country
     */
    public function addStakeholder(\DatabaseBundle\Entity\Stakeholder $stakeholders)
    {
        $this->stakeholders[] = $stakeholders;
        $stakeholders->setCountry($this);

        return $this;
    }

    /**
     * Remove stakeholders
     *
     * @param \DatabaseBundle\Entity\Stakeholder $stakeholders
     */
    public function removeStakeholder(\DatabaseBundle\Entity\Stakeholder $stakeholders)
    {
        $this->stakeholders->removeElement($stakeholders);
    }

    /**
     * Get stakeholders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStakeholders()
    {
        return $this->stakeholders;
    }

    /**
     * Set geographicalArea
     *
     * @param \DatabaseBundle\Entity\GeographicalArea $geographicalArea
     * @return Country
     */
    public function setGeographicalArea(\DatabaseBundle\Entity\GeographicalArea $geographicalArea)
    {
        $this->geographicalArea = $geographicalArea;

        return $this;
    }

    /**
     * Get geographicalArea
     *
     * @return \DatabaseBundle\Entity\GeographicalArea 
     */
    public function getGeographicalArea()
    {
        return $this->geographicalArea;
    }

    /**
     * Add platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platforms
     * @return Country
     */
    public function addPlatform(\DatabaseBundle\Entity\Platform $platforms)
    {
        $this->platforms[] = $platforms;
        $platforms->setCountry($this);

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
     * Add basis
     *
     * @param \DatabaseBundle\Entity\Base $basis
     *
     * @return Country
     */
    public function addBase(\DatabaseBundle\Entity\Base $basis)
    {
        $this->bases[] = $basis;
        $basis->setCountry($this);

        return $this;
    }

    /**
     * Remove basis
     *
     * @param \DatabaseBundle\Entity\Base $basis
     */
    public function removeBase(\DatabaseBundle\Entity\Base $basis)
    {
        $this->bases->removeElement($basis);
    }

    /**
     * Get bases
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBases()
    {
        return $this->bases;
    }

    /**
     * Add countryArea
     *
     * @param \DatabaseBundle\Entity\CountryArea $countryArea
     *
     * @return Country
     */
    public function addCountryArea(\DatabaseBundle\Entity\CountryArea $countryArea)
    {
        $this->countryArea[] = $countryArea;
        $countryArea->setCountry($this);

        return $this;
    }

    /**
     * Remove countryArea
     *
     * @param \DatabaseBundle\Entity\CountryArea $countryArea
     */
    public function removeCountryArea(\DatabaseBundle\Entity\CountryArea $countryArea)
    {
        $this->countryArea->removeElement($countryArea);
    }

    /**
     * Get countryArea
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCountryArea()
    {
        return $this->countryArea;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Country
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryFullName
     *
     * @param string $countryFullName
     *
     * @return Country
     */
    public function setCountryFullName($countryFullName)
    {
        $this->countryFullName = $countryFullName;

        return $this;
    }

    /**
     * Get countryFullName
     *
     * @return string
     */
    public function getCountryFullName()
    {
        return $this->countryFullName;
    }
}
