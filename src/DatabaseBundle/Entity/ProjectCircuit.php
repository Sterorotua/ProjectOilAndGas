<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectCircuit
 *
 * @ORM\Table(name="project_circuit")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ProjectCircuitRepository")
 */
class ProjectCircuit
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
     * @ORM\Column(name="orderNumber", type="integer")
     */
    private $orderNumber;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Project", inversedBy="circuit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Platform", inversedBy="circuit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $platform;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperationalMode", inversedBy="circuit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $operationalMode;
    
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
     * Set orderNumber
     *
     * @param integer $orderNumber
     * @return ProjectCircuit
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return integer 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set project
     *
     * @param \DatabaseBundle\Entity\Project $project
     * @return ProjectCircuit
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
     * Set platform
     *
     * @param \DatabaseBundle\Entity\Platform $platform
     * @return ProjectCircuit
     */
    public function setPlatform(\DatabaseBundle\Entity\Platform $platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return \DatabaseBundle\Entity\Platform 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set operationalMode
     *
     * @param \DatabaseBundle\Entity\OperationalMode $operationalMode
     * @return ProjectCircuit
     */
    public function setOperationalMode(\DatabaseBundle\Entity\OperationalMode $operationalMode)
    {
        $this->operationalMode = $operationalMode;

        return $this;
    }

    /**
     * Get operationalMode
     *
     * @return \DatabaseBundle\Entity\OperationalMode 
     */
    public function getOperationalMode()
    {
        return $this->operationalMode;
    }
}
