<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CountryArea
 *
 * @ORM\Table(name="country_area")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\CountryAreaRepository")
 */
class CountryArea
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
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country", inversedBy="countryArea")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\BusinessArea", inversedBy="countryArea")
     * @ORM\JoinColumn(nullable=false)
     */
    private $businessArea;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     *
     * @return CountryArea
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
     * Set businessArea
     *
     * @param \DatabaseBundle\Entity\BusinessArea $businessArea
     *
     * @return CountryArea
     */
    public function setBusinessArea(\DatabaseBundle\Entity\BusinessArea $businessArea)
    {
        $this->businessArea = $businessArea;

        return $this;
    }

    /**
     * Get businessArea
     *
     * @return \DatabaseBundle\Entity\BusinessArea
     */
    public function getBusinessArea()
    {
        return $this->businessArea;
    }
}
