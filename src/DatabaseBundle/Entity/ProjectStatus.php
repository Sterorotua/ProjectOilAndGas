<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectStatus
 *
 * @ORM\Table(name="project_status")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ProjectStatusRepository")
 */
class ProjectStatus
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
     * @ORM\Column(name="projectStatusName", type="string", length=255)
     */
    private $projectStatusName;


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
     * Set projectStatusName
     *
     * @param string $projectStatusName
     * @return ProjectStatus
     */
    public function setProjectStatusName($projectStatusName)
    {
        $this->projectStatusName = $projectStatusName;

        return $this;
    }

    /**
     * Get projectStatusName
     *
     * @return string 
     */
    public function getProjectStatusName()
    {
        return $this->projectStatusName;
    }
}
