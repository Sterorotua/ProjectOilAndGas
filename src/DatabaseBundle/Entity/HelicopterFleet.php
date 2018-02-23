<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterFleet
 *
 * @ORM\Table(name="helicopter_fleet")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterFleetRepository")
 */
class HelicopterFleet
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Project", inversedBy="helicopterFleet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterClass", inversedBy="helicopterFleet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopterClass;

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
     * Set quantity
     *
     * @param integer $quantity
     * @return HelicopterFleet
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set project
     *
     * @param \DatabaseBundle\Entity\Project $project
     * @return HelicopterFleet
     */
    public function setProject(\DatabaseBundle\Entity\Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \DatabaseBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set helicopterClass
     *
     * @param \DatabaseBundle\Entity\HelicopterClass $helicopterClass
     * @return HelicopterFleet
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
}
