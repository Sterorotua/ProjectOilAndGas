<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessArea
 *
 * @ORM\Table(name="business_area")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\BusinessAreaRepository")
 */
class BusinessArea
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
     * @ORM\Column(name="businessAreaName", type="string", length=255)
     */
    private $businessAreaName;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\CountryArea", mappedBy="businessArea", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $countryArea;


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
     * Set businessAreaName
     *
     * @param string $businessAreaName
     * @return BusinessArea
     */
    public function setBusinessAreaName($businessAreaName)
    {
        $this->businessAreaName = $businessAreaName;

        return $this;
    }

    /**
     * Get businessAreaName
     *
     * @return string 
     */
    public function getBusinessAreaName()
    {
        return $this->businessAreaName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->countryArea = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add countryArea
     *
     * @param \DatabaseBundle\Entity\CountryArea $countryArea
     *
     * @return BusinessArea
     */
    public function addCountryArea(\DatabaseBundle\Entity\CountryArea $countryArea)
    {
        $this->countryArea[] = $countryArea;
        $countryArea->setBusinessArea($this);

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
}
