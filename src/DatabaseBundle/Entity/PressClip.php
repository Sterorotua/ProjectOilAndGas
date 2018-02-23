<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PressClip
 *
 * @ORM\Table(name="press_clip")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\PressClipRepository")
 */
class PressClip
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
     * @var \DateTime
     *
     * @ORM\Column(name="pressClipDate", type="datetime")
     */
    private $pressClipDate;

    /**
     * @var string
     *
     * @ORM\Column(name="pressClipMainContent", type="text")
     */
    private $pressClipMainContent;

    /**
     * @var string
     *
     * @ORM\Column(name="pressClipLink", type="string", length=255)
     */
    private $pressClipLink;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\PressClipPlatform", mappedBy="pressClip", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $pressClipPlatform;

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
     * Set pressClipDate
     *
     * @param \DateTime $pressClipDate
     * @return PressClip
     */
    public function setPressClipDate($pressClipDate)
    {
        $this->pressClipDate = $pressClipDate;

        return $this;
    }

    /**
     * Get pressClipDate
     *
     * @return \DateTime 
     */
    public function getPressClipDate()
    {
        return $this->pressClipDate;
    }

    /**
     * Set pressClipMainContent
     *
     * @param string $pressClipMainContent
     * @return PressClip
     */
    public function setPressClipMainContent($pressClipMainContent)
    {
        $this->pressClipMainContent = $pressClipMainContent;

        return $this;
    }

    /**
     * Get pressClipMainContent
     *
     * @return string 
     */
    public function getPressClipMainContent()
    {
        return $this->pressClipMainContent;
    }

    /**
     * Set pressClipLink
     *
     * @param string $pressClipLink
     * @return PressClip
     */
    public function setPressClipLink($pressClipLink)
    {
        $this->pressClipLink = $pressClipLink;

        return $this;
    }

    /**
     * Get pressClipLink
     *
     * @return string 
     */
    public function getPressClipLink()
    {
        return $this->pressClipLink;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pressClipPlatform = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pressClipPlatform
     *
     * @param \DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform
     * @return PressClip
     */
    public function addPressClipPlatform(\DatabaseBundle\Entity\PressClipPlatform $pressClipPlatform)
    {
        $this->pressClipPlatform[] = $pressClipPlatform;
        $pressClipPlatform->setPressClip($this);

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
}
