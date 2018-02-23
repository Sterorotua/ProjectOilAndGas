<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AircraftFleet
 *
 * @ORM\Table(name="aircraft_fleet")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\AircraftFleetRepository")
 */
class AircraftFleet
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
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Project", inversedBy="aircraftFleet")
     * @ORM\JoinColumn(nullable=true)
     */
    private $project;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterCategory", inversedBy="aircraftFleet")
     * @ORM\JoinColumn(nullable=true)
     */
    private $helicopterCategory;

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
     * @return AircraftFleet
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
     * @return AircraftFleet
     */
    public function setProject(\DatabaseBundle\Entity\Project $project = null)
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
     * Set helicopterCategory
     *
     * @param \DatabaseBundle\Entity\HelicopterCategory $helicopterCategory
     * @return AircraftFleet
     */
    public function setHelicopterCategory(\DatabaseBundle\Entity\HelicopterCategory $helicopterCategory = null)
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
}
