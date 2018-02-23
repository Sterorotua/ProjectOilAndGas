<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterCategory
 *
 * @ORM\Table(name="helicopter_category")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterCategoryRepository")
 */
class HelicopterCategory
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
     * @ORM\Column(name="helicopterCategoryName", type="string", length=255)
     */
    private $helicopterCategoryName;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\AircraftFleet", mappedBy="helicopterCategory", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $aircraftFleet;

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
     * Set helicopterCategoryName
     *
     * @param string $helicopterCategoryName
     * @return HelicopterCategory
     */
    public function setHelicopterCategoryName($helicopterCategoryName)
    {
        $this->helicopterCategoryName = $helicopterCategoryName;

        return $this;
    }

    /**
     * Get helicopterCategoryName
     *
     * @return string 
     */
    public function getHelicopterCategoryName()
    {
        return $this->helicopterCategoryName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aircraftFleet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add aircraftFleet
     *
     * @param \DatabaseBundle\Entity\AircraftFleet $aircraftFleet
     * @return HelicopterCategory
     */
    public function addAircraftFleet(\DatabaseBundle\Entity\AircraftFleet $aircraftFleet)
    {
        $this->aircraftFleet[] = $aircraftFleet;
        $aircraftFleet->setHelicopterCategory($this);

        return $this;
    }

    /**
     * Remove aircraftFleet
     *
     * @param \DatabaseBundle\Entity\AircraftFleet $aircraftFleet
     */
    public function removeAircraftFleet(\DatabaseBundle\Entity\AircraftFleet $aircraftFleet)
    {
        $this->aircraftFleet->removeElement($aircraftFleet);
    }

    /**
     * Get aircraftFleet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAircraftFleet()
    {
        return $this->aircraftFleet;
    }
}
