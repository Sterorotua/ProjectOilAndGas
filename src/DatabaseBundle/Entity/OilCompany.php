<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OilCompany
 *
 * @ORM\Table(name="oil_company")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OilCompanyRepository")
 */
class OilCompany
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
     * @ORM\Column(name="oilCompanyName", type="string", length=255)
     */
    private $oilCompanyName;

    /**
     * @var string
     *
     * @ORM\Column(name="shortIntroduction", type="text", nullable=true)
     */
    private $shortIntroduction;

    /**
     * @var string
     *
     * @ORM\Column(name="webSiteLink", type="string", length=255, nullable=true)
     */
    private $webSiteLink;

    /**
     * @var string
     *
     * @ORM\Column(name="investorsLink", type="string", length=255, nullable=true)
     */
    private $investorsLink;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\PressClipPlatform", mappedBy="oilCompany", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $pressClipPlatform;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Stakeholder", mappedBy="oilCompany", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stakeholders;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\OilCompanyAlias", mappedBy="oilCompanyGroup", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $oilCompanyAliases;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Platform", mappedBy="oilCompany", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $platforms;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Project", mappedBy="oilCompany", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $projects;

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
     * Set oilCompanyName
     *
     * @param string $oilCompanyName
     * @return OilCompany
     */
    public function setOilCompanyName($oilCompanyName)
    {
        $this->oilCompanyName = $oilCompanyName;

        return $this;
    }

    /**
     * Get oilCompanyName
     *
     * @return string 
     */
    public function getOilCompanyName()
    {
        return $this->oilCompanyName;
    }

    /**
     * Set shortIntroduction
     *
     * @param string $shortIntroduction
     * @return OilCompany
     */
    public function setShortIntroduction($shortIntroduction)
    {
        $this->shortIntroduction = $shortIntroduction;

        return $this;
    }

    /**
     * Get shortIntroduction
     *
     * @return string 
     */
    public function getShortIntroduction()
    {
        return $this->shortIntroduction;
    }

    /**
     * Set webSiteLink
     *
     * @param string $webSiteLink
     * @return OilCompany
     */
    public function setWebSiteLink($webSiteLink)
    {
        $this->webSiteLink = $webSiteLink;

        return $this;
    }

    /**
     * Get webSiteLink
     *
     * @return string 
     */
    public function getWebSiteLink()
    {
        return $this->webSiteLink;
    }

    /**
     * Set investorsLink
     *
     * @param string $investorsLink
     * @return OilCompany
     */
    public function setInvestorsLink($investorsLink)
    {
        $this->investorsLink = $investorsLink;

        return $this;
    }

    /**
     * Get investorsLink
     *
     * @return string 
     */
    public function getInvestorsLink()
    {
        return $this->investorsLink;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pressClipPlatform = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stakeholders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->oilCompanyAliases = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platforms = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pressClipPlatform
     *
     * @param \DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform
     * @return OilCompany
     */
    public function addPressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {
        $this->pressClipPlatform[] = $pressClipPlatform;
        $pressClipPlatform->setOilCompany($this);

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
     * @return OilCompany
     */
    public function addStakeholder(\DatabaseBundle\Entity\Stakeholder $stakeholders)
    {
        $this->stakeholders[] = $stakeholders;
        $stakeholders->setOilCompany($this);

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
     * Add oilCompanyAliases
     *
     * @param \DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases
     * @return OilCompany
     */
    public function addOilCompanyAlias(\DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases)
    {
        $this->oilCompanyAliases[] = $oilCompanyAliases;
        $oilCompanyAliases->setOilCompanyGroup($this);

        return $this;
    }

    /**
     * Remove oilCompanyAliases
     *
     * @param \DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases
     */
    public function removeOilCompanyAlias(\DatabaseBundle\Entity\OilCompanyAlias $oilCompanyAliases)
    {
        $this->oilCompanyAliases->removeElement($oilCompanyAliases);
    }

    /**
     * Get oilCompanyAliases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOilCompanyAliases()
    {
        return $this->oilCompanyAliases;
    }

    /**
     * Add platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platforms
     * @return OilCompany
     */
    public function addPlatform(\DatabaseBundle\Entity\Platform $platforms)
    {
        $this->platforms[] = $platforms;
        $platforms->setOilCompany($this);

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
     * @return OilCompany
     */
    public function addProject(\DatabaseBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
        $projects->setOilCompany($this);

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
}
