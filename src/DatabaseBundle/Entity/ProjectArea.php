<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectArea
 *
 * @ORM\Table(name="project_area")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ProjectAreaRepository")
 */
class ProjectArea
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
     * @var float
     *
     * @ORM\Column(name="projectAreaLatitude", type="float")
     */
    private $projectAreaLatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="projectAreaLongitude", type="float")
     */
    private $projectAreaLongitude;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\MissionArea", mappedBy="projectArea", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $missionAreas;

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
     * Set projectAreaLatitude
     *
     * @param float $projectAreaLatitude
     *
     * @return ProjectArea
     */
    public function setProjectAreaLatitude($projectAreaLatitude)
    {
        $this->projectAreaLatitude = $projectAreaLatitude;

        return $this;
    }

    /**
     * Get projectAreaLatitude
     *
     * @return float
     */
    public function getProjectAreaLatitude()
    {
        return $this->projectAreaLatitude;
    }

    /**
     * Set projectAreaLongitude
     *
     * @param float $projectAreaLongitude
     *
     * @return ProjectArea
     */
    public function setProjectAreaLongitude($projectAreaLongitude)
    {
        $this->projectAreaLongitude = $projectAreaLongitude;

        return $this;
    }

    /**
     * Get projectAreaLongitude
     *
     * @return float
     */
    public function getProjectAreaLongitude()
    {
        return $this->projectAreaLongitude;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->missionAreas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add missionArea
     *
     * @param \DatabaseBundle\Entity\MissionArea $missionArea
     *
     * @return ProjectArea
     */
    public function addMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {
        $this->missionAreas[] = $missionArea;
        $missionArea->setProjectArea($this);

        return $this;
    }

    /**
     * Remove missionArea
     *
     * @param \DatabaseBundle\Entity\MissionArea $missionArea
     */
    public function removeMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {
        $this->missionAreas->removeElement($missionArea);
    }

    /**
     * Get missionAreas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMissionAreas()
    {
        return $this->missionAreas;
    }
}
