<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basin
 *
 * @ORM\Table(name="basin")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\BasinRepository")
 */
class Basin
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
     * @ORM\Column(name="basinName", type="string", length=255)
     */
    private $basinName;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Sea")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sea;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Base", mappedBy="basin", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $bases;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Platform", mappedBy="basin", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $platforms;

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
     * Set basinName
     *
     * @param string $basinName
     * @return Basin
     */
    public function setBasinName($basinName)
    {
        $this->basinName = $basinName;

        return $this;
    }

    /**
     * Get basinName
     *
     * @return string 
     */
    public function getBasinName()
    {
        return $this->basinName;
    }

    /**
     * Set sea
     *
     * @param \DatabaseBundle\Entity\Sea $sea
     * @return Basin
     */
    public function setSea(\DatabaseBundle\Entity\Sea $sea = null)
    {
        $this->sea = $sea;

        return $this;
    }

    /**
     * Get sea
     *
     * @return \DatabaseBundle\Entity\Sea 
     */
    public function getSea()
    {
        return $this->sea;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bases = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platforms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bases
     *
     * @param \DatabaseBundle\Entity\Base $bases
     * @return Basin
     */
    public function addBase(\DatabaseBundle\Entity\Base $bases)
    {
        $this->bases[] = $bases;
        $bases->setBasin($this);

        return $this;
    }

    /**
     * Remove bases
     *
     * @param \DatabaseBundle\Entity\Base $bases
     */
    public function removeBase(\DatabaseBundle\Entity\Base $bases)
    {
        $this->bases->removeElement($bases);
    }

    /**
     * Get bases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBases()
    {
        return $this->bases;
    }

    /**
     * Add platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platform
     * @return Basin
     */
    public function addPlatform(\DatabaseBundle\Entity\Platform $platform)
    {
        $this->platforms[] = $platform;
        $platform->setBasin($this);

        return $this;
    }

    /**
     * Remove platforms
     *
     * @param \DatabaseBundle\Entity\Platform $platforms
     */
    public function removePlatform(\DatabaseBundle\Entity\Platform $platforms)
    {
        $this->platforms->removeElement($platforms);
    }

    /**
     * Get platforms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }
}
