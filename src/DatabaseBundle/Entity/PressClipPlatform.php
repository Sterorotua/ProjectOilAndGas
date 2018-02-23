<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PressClipPlatform
 *
 * @ORM\Table(name="press_clip_platform")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\PressClipPlatformRepository")
 */
class PressClipPlatform
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
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\PressClip", inversedBy="pressClipPlatform")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pressClip;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OilCompany", inversedBy="pressClipPlatform")
     * @ORM\JoinColumn(nullable=false)
     */
    private $oilCompany;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country", inversedBy="pressClipPlatform")
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
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     * @return PressClipPlatform
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
     * Set pressClip
     *
     * @param \DatabaseBundle\Entity\PressClip $pressClip
     * @return PressClipPlatform
     */
    public function setPressClip(\DatabaseBundle\Entity\PressClip $pressClip)
    {
        $this->pressClip = $pressClip;

        return $this;
    }

    /**
     * Get pressClip
     *
     * @return \DatabaseBundle\Entity\PressClip 
     */
    public function getPressClip()
    {
        return $this->pressClip;
    }

    /**
     * Set oilCompany
     *
     * @param \DatabaseBundle\Entity\OilCompany $oilCompany
     * @return PressClipPlatform
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
}
