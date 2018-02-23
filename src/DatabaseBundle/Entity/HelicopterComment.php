<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterComment
 *
 * @ORM\Table(name="helicopter_comment")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterCommentRepository")
 */
class HelicopterComment
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\User", inversedBy="helicopterComments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Helicopter", inversedBy="helicopterComments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopter;

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
     * Set content
     *
     * @param string $content
     * @return HelicopterComment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return HelicopterComment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \DatabaseBundle\Entity\User $user
     * @return HelicopterComment
     */
    public function setUser(\DatabaseBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DatabaseBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set helicopter
     *
     * @param \DatabaseBundle\Entity\Helicopter $helicopter
     * @return HelicopterComment
     */
    public function setHelicopter(\DatabaseBundle\Entity\Helicopter $helicopter)
    {
        $this->helicopter = $helicopter;

        return $this;
    }

    /**
     * Get helicopter
     *
     * @return \DatabaseBundle\Entity\Helicopter 
     */
    public function getHelicopter()
    {
        return $this->helicopter;
    }
}
