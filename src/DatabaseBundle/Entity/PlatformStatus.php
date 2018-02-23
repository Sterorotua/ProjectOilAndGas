<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlatformStatus
 *
 * @ORM\Table(name="platform_status")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\PlatformStatusRepository")
 */
class PlatformStatus
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
     * @ORM\Column(name="platformStatusName", type="string", length=255, unique=true)
     */
    private $platformStatusName;


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
     * Set platformStatusName
     *
     * @param string $platformStatusName
     *
     * @return PlatformStatus
     */
    public function setPlatformStatusName($platformStatusName)
    {
        $this->platformStatusName = $platformStatusName;

        return $this;
    }

    /**
     * Get platformStatusName
     *
     * @return string
     */
    public function getPlatformStatusName()
    {
        return $this->platformStatusName;
    }
}
