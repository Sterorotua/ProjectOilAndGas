<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stakeholder
 *
 * @ORM\Table(name="stakeholder")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\StakeholderRepository")
 */
class Stakeholder
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
     * @ORM\Column(name="stakeholderLink", type="string", length=255)
     */
    private $stakeholderLink;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OilCompany", inversedBy="stakeholders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $oilCompany;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country", inversedBy="stakeholders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

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
     * Set stakeholderLink
     *
     * @param string $stakeholderLink
     * @return Stakeholder
     */
    public function setStakeholderLink($stakeholderLink)
    {
        $this->stakeholderLink = $stakeholderLink;

        return $this;
    }

    /**
     * Get stakeholderLink
     *
     * @return string 
     */
    public function getStakeholderLink()
    {
        return $this->stakeholderLink;
    }

    /**
     * Set oilCompany
     *
     * @param \DatabaseBundle\Entity\OilCompany $oilCompany
     * @return Stakeholder
     */
    public function setOilCompany(\DatabaseBundle\Entity\OilCompany $oilCompany)
    {
        $this->oilCompany = $oilCompany;

        return $this;
    }

    /**
     * Get oilCompany
     *
     * @return \DatabaseBundle\Entity\OilCompany 
     */
    public function getOilCompany()
    {
        return $this->oilCompany;
    }

    /**
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     * @return Stakeholder
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
}
