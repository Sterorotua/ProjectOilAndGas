<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachment
 *
 * @ORM\Table(name="attachment")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\AttachmentRepository")
 */
class Attachment
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
     * @ORM\Column(name="attachmentFileName", type="string", length=255)
     */
    private $attachmentFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="attachementServerLink", type="string", length=255)
     */
    private $attachementServerLink;

    /**
     * @var string
     *
     * @ORM\Column(name="attachmentExternalLink", type="string", length=255)
     */
    private $attachmentExternalLink;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\PressClip")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pressClip;


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
     * Set attachmentFileName
     *
     * @param string $attachmentFileName
     * @return Attachment
     */
    public function setAttachmentFileName($attachmentFileName)
    {
        $this->attachmentFileName = $attachmentFileName;

        return $this;
    }

    /**
     * Get attachmentFileName
     *
     * @return string 
     */
    public function getAttachmentFileName()
    {
        return $this->attachmentFileName;
    }

    /**
     * Set attachementServerLink
     *
     * @param string $attachementServerLink
     * @return Attachment
     */
    public function setAttachementServerLink($attachementServerLink)
    {
        $this->attachementServerLink = $attachementServerLink;

        return $this;
    }

    /**
     * Get attachementServerLink
     *
     * @return string 
     */
    public function getAttachementServerLink()
    {
        return $this->attachementServerLink;
    }

    /**
     * Set attachmentExternalLink
     *
     * @param string $attachmentExternalLink
     * @return Attachment
     */
    public function setAttachmentExternalLink($attachmentExternalLink)
    {
        $this->attachmentExternalLink = $attachmentExternalLink;

        return $this;
    }

    /**
     * Get attachmentExternalLink
     *
     * @return string 
     */
    public function getAttachmentExternalLink()
    {
        return $this->attachmentExternalLink;
    }

    /**
     * Set pressClip
     *
     * @param \DatabaseBundle\Entity\PressClip $pressClip
     * @return Attachment
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
}
