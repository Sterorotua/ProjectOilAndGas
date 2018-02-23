<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterClass
 *
 * @ORM\Table(name="helicopter_class")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterClassRepository")
 */
class HelicopterClass
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
     * @ORM\Column(name="helicopterClassName", type="string", length=255)
     */
    private $helicopterClassName;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\HelicopterFleet", mappedBy="helicopterClass", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $helicopterFleet;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\OperatorsHelicopters", mappedBy="helicopterClass", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $operatorsHelicopters;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopterCategory;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Constructor")
     * @ORM\JoinColumn(nullable=false)
     */
    private $constructor;


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
     * Set helicopterClassName
     *
     * @param string $helicopterClassName
     * @return HelicopterClass
     */
    public function setHelicopterClassName($helicopterClassName)
    {
        $this->helicopterClassName = $helicopterClassName;

        return $this;
    }

    /**
     * Get helicopterClassName
     *
     * @return string 
     */
    public function getHelicopterClassName()
    {
        return $this->helicopterClassName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->helicopterFleet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->operatorsHelicopters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add helicopterFleet
     *
     * @param \DatabaseBundle\Entity\HelicopterFleet $helicopterFleet
     * @return HelicopterClass
     */
    public function addHelicopterFleet(\DatabaseBundle\Entity\HelicopterFleet $helicopterFleet)
    {
        $this->helicopterFleet[] = $helicopterFleet;
        $helicopterFleet->setHelicopterClass($this);

        return $this;
    }

    /**
     * Remove helicopterFleet
     *
     * @param \DatabaseBundle\Entity\HelicopterFleet $helicopterFleet
     */
    public function removeHelicopterFleet(\DatabaseBundle\Entity\HelicopterFleet $helicopterFleet)
    {
        $this->helicopterFleet->removeElement($helicopterFleet);
    }

    /**
     * Get helicopterFleet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHelicopterFleet()
    {
        return $this->helicopterFleet;
    }

    /**
     * Add operatorsHelicopters
     *
     * @param \DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters
     * @return HelicopterClass
     */
    public function addOperatorsHelicopter(\DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters)
    {
        $this->operatorsHelicopters[] = $operatorsHelicopters;
        $operatorsHelicopters->setHelicopterClass($this);

        return $this;
    }

    /**
     * Remove operatorsHelicopters
     *
     * @param \DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters
     */
    public function removeOperatorsHelicopter(\DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters)
    {
        $this->operatorsHelicopters->removeElement($operatorsHelicopters);
    }

    /**
     * Get operatorsHelicopters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperatorsHelicopters()
    {
        return $this->operatorsHelicopters;
    }

    /**
     * Set helicopterCategory
     *
     * @param \DatabaseBundle\Entity\HelicopterCategory $helicopterCategory
     * @return HelicopterClass
     */
    public function setHelicopterCategory(\DatabaseBundle\Entity\HelicopterCategory $helicopterCategory)
    {
        $this->helicopterCategory = $helicopterCategory;

        return $this;
    }

    /**
     * Get helicopterCategory
     *
     * @return \DatabaseBundle\Entity\HelicopterCategory 
     */
    public function getHelicopterCategory()
    {
        return $this->helicopterCategory;
    }

    /**
     * Set constructor
     *
     * @param \DatabaseBundle\Entity\Constructor $constructor
     * @return HelicopterClass
     */
    public function setConstructor(\DatabaseBundle\Entity\Constructor $constructor)
    {
        $this->constructor = $constructor;

        return $this;
    }

    /**
     * Get constructor
     *
     * @return \DatabaseBundle\Entity\Constructor 
     */
    public function getConstructor()
    {
        return $this->constructor;
    }
}
