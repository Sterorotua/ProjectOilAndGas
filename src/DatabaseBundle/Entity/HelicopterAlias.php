<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterAlias
 *
 * @ORM\Table(name="helicopter_alias")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterAliasRepository")
 */
class HelicopterAlias
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
     * @ORM\Column(name="helicopterAliasName", type="string", length=255)
     */
    private $helicopterAliasName;
    
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
     * Set helicopterAliasName
     *
     * @param string $helicopterAliasName
     * @return HelicopterAlias
     */
    public function setHelicopterAliasName($helicopterAliasName)
    {
        $this->helicopterAliasName = $helicopterAliasName;

        return $this;
    }

    /**
     * Get helicopterAliasName
     *
     * @return string 
     */
    public function getHelicopterAliasName()
    {
        return $this->helicopterAliasName;
    }

    /**
     * Set helicopterClass
     *
     * @param \DatabaseBundle\Entity\HelicopterClass $helicopterClass
     * @return HelicopterAlias
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
