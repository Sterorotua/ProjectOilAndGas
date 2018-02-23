<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constructor
 *
 * @ORM\Table(name="constructor")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ConstructorRepository")
 */
class Constructor
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
     * @ORM\Column(name="constructorName", type="string", length=255)
     */
    private $constructorName;


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
     * Set constructorName
     *
     * @param string $constructorName
     * @return Constructor
     */
    public function setConstructorName($constructorName)
    {
        $this->constructorName = $constructorName;

        return $this;
    }

    /**
     * Get constructorName
     *
     * @return string 
     */
    public function getConstructorName()
    {
        return $this->constructorName;
    }
}
