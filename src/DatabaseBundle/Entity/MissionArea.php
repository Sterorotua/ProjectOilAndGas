<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MissionArea
 *
 * @ORM\Table(name="mission_area")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\MissionAreaRepository")
 */
class MissionArea
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
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\MissionTool", inversedBy="missionAreas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $missionTool;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\ProjectArea", inversedBy="missionAreas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projectArea;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Project", inversedBy="missionAreas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;
    
    /**
     * @var int
     *
     * @ORM\Column(name="orderNumber", type="integer", nullable=true)
     */
    private $orderNumber;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     *
     * @return MissionArea
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set missionTool
     *
     * @param \DatabaseBundle\Entity\MissionTool $missionTool
     *
     * @return MissionArea
     */
    public function setMissionTool(\DatabaseBundle\Entity\MissionTool $missionTool)
    {
        $this->missionTool = $missionTool;

        return $this;
    }

    /**
     * Get missionTool
     *
     * @return \DatabaseBundle\Entity\MissionTool
     */
    public function getMissionTool()
    {
        return $this->missionTool;
    }

    /**
     * Set projectArea
     *
     * @param \DatabaseBundle\Entity\ProjectArea $projectArea
     *
     * @return MissionArea
     */
    public function setProjectArea(\DatabaseBundle\Entity\ProjectArea $projectArea)
    {
        $this->projectArea = $projectArea;

        return $this;
    }

    /**
     * Get projectArea
     *
     * @return \DatabaseBundle\Entity\ProjectArea
     */
    public function getProjectArea()
    {
        return $this->projectArea;
    }

    /**
     * Set project
     *
     * @param \DatabaseBundle\Entity\Project $project
     *
     * @return MissionArea
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
}
