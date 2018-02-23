<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HelicopterStatus
 *
 * @ORM\Table(name="helicopter_status")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\HelicopterStatusRepository")
 */
class HelicopterStatus
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
     * @ORM\Column(name="helicopterStatusName", type="string", length=255)
     */
    private $helicopterStatusName;


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
     * Set helicopterStatusName
     *
     * @param string $helicopterStatusName
     * @return HelicopterStatus
     */
    public function setHelicopterStatusName($helicopterStatusName)
    {
        $this->helicopterStatusName = $helicopterStatusName;

        return $this;
    }

    /**
     * Get helicopterStatusName
     *
     * @return string 
     */
    public function getHelicopterStatusName()
    {
        return $this->helicopterStatusName;
    }
}
