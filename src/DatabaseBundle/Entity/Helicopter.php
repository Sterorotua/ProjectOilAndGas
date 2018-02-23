<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Helicopter
 *
 * @ORM\Table(name="helicopter")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterRepository")
 */
class Helicopter
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
     * @ORM\Column(name="serialNumber", type="string", length=255)
     */
    private $serialNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="register", type="string", length=255)
     */
    private $register;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\HelicopterComment", mappedBy="helicopter", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $helicopterComments;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterClass")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopterClass;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Owner")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopterStatus;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperatorGroup")
     * @ORM\JoinColumn(nullable=false)
     */
    private $operatorGroup;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Base")
     * @ORM\JoinColumn(nullable=true)
     */
    private $base;

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
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return Helicopter
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set register
     *
     * @param string $register
     * @return Helicopter
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return string 
     */
    public function getRegister()
    {
        return $this->register;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->helicopterComments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add helicopterComments
     *
     * @param \DatabaseBundle\Entity\HelicopterComment $helicopterComments
     * @return Helicopter
     */
    public function addHelicopterComment(\DatabaseBundle\Entity\HelicopterComment $helicopterComments)
    {
        $this->helicopterComments[] = $helicopterComments;
        $helicopterComments->setHelicopter($this);

        return $this;
    }

    /**
     * Remove helicopterComments
     *
     * @param \DatabaseBundle\Entity\HelicopterComment $helicopterComments
     */
    public function removeHelicopterComment(\DatabaseBundle\Entity\HelicopterComment $helicopterComments)
    {
        $this->helicopterComments->removeElement($helicopterComments);
    }

    /**
     * Get helicopterComments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHelicopterComments()
    {
        return $this->helicopterComments;
    }

    /**
     * Set helicopterClass
     *
     * @param \DatabaseBundle\Entity\HelicopterClass $helicopterClass
     * @return Helicopter
     */
    public function setHelicopterClass(\DatabaseBundle\Entity\HelicopterClass $helicopterClass)
    {
        $this->helicopterClass = $helicopterClass;

        return $this;
    }

    /**
     * Get helicopterClass
     *
     * @return \DatabaseBundle\Entity\HelicopterClass 
     */
    public function getHelicopterClass()
    {
        return $this->helicopterClass;
    }

    /**
     * Set owner
     *
     * @param \DatabaseBundle\Entity\Owner $owner
     * @return Helicopter
     */
    public function setOwner(\DatabaseBundle\Entity\Owner $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \DatabaseBundle\Entity\Owner 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set helicopterStatus
     *
     * @param \DatabaseBundle\Entity\HelicopterStatus $helicopterStatus
     * @return Helicopter
     */
    public function setHelicopterStatus(\DatabaseBundle\Entity\HelicopterStatus $helicopterStatus)
    {
        $this->helicopterStatus = $helicopterStatus;

        return $this;
    }

    /**
     * Get helicopterStatus
     *
     * @return \DatabaseBundle\Entity\HelicopterStatus 
     */
    public function getHelicopterStatus()
    {
        return $this->helicopterStatus;
    }

    /**
     * Set operatorGroup
     *
     * @param \DatabaseBundle\Entity\Helicopter $operatorGroup
     * @return Helicopter
     */
    public function setOperatorGroup(\DatabaseBundle\Entity\Helicopter $operatorGroup)
    {
        $this->operatorGroup = $operatorGroup;

        return $this;
    }

    /**
     * Get operatorGroup
     *
     * @return \DatabaseBundle\Entity\Helicopter 
     */
    public function getOperatorGroup()
    {
        return $this->operatorGroup;
    }

    /**
     * Set base
     *
     * @param \DatabaseBundle\Entity\Base $base
     * @return Helicopter
     */
    public function setBase(\DatabaseBundle\Entity\Base $base = null)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \DatabaseBundle\Entity\Base 
     */
    public function getBase()
    {
        return $this->base;
    }
}
