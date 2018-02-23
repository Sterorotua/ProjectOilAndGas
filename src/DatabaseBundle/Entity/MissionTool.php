<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MissionTool
 *
 * @ORM\Table(name="mission_tool")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\MissionToolRepository")
 */
class MissionTool
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
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Alternate")
     * @ORM\JoinColumn(nullable=true)
     */
    private $alternate;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\MissionArea", mappedBy="missionTool", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $missionAreas;
    
    /**
     * @var string
     *
     * @ORM\Column(name="missionComment", type="string", length=255, nullable=true)
     */
    private $missionComment;

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
     * Set alternate
     *
     * @param \DatabaseBundle\Entity\Alternate $alternate
     *
     * @return MissionTool
     */
    public function setAlternate(\DatabaseBundle\Entity\Alternate $alternate)
    {
        $this->alternate = $alternate;

        return $this;
    }

    /**
     * Get alternate
     *
     * @return \DatabaseBundle\Entity\Alternate
     */
    public function getAlternate()
    {
        return $this->alternate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->missionAreas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set missionComment
     *
     * @param string $missionComment
     *
     * @return MissionTool
     */
    public function setMissionComment($missionComment)
    {
        $this->missionComment = $missionComment;

        return $this;
    }

    /**
     * Get missionComment
     *
     * @return string
     */
    public function getMissionComment()
    {
        return $this->missionComment;
    }

    /**
     * Add missionArea
     *
     * @param \DatabaseBundle\Entity\MissionArea $missionArea
     *
     * @return MissionTool
     */
    public function addMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {
        $this->missionAreas[] = $missionArea;
        $missionArea->setMissionTool($this);

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
