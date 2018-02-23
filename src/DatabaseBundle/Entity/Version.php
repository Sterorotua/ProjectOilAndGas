<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\VersionRepository")
 */
class Version
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
     * @ORM\Column(name="versionName", type="string", length=255)
     */
    private $versionName;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterClass")
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
     * Set versionName
     *
     * @param string $versionName
     * @return Version
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;

        return $this;
    }

    /**
     * Get versionName
     *
     * @return string 
     */
    public function getVersionName()
    {
        return $this->versionName;
    }

    /**
     * Set helicopterClass
     *
     * @param \DatabaseBundle\Entity\HelicopterClass $helicopterClass
     * @return Version
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
