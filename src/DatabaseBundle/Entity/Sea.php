<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sea
 *
 * @ORM\Table(name="sea")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\SeaRepository")
 */
class Sea
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
     * @ORM\Column(name="seaName", type="string", length=255)
     */
    private $seaName;

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
     * Set seaName
     *
     * @param string $seaName
     * @return Sea
     */
    public function setSeaName($seaName)
    {
        $this->seaName = $seaName;

        return $this;
    }

    /**
     * Get seaName
     *
     * @return string 
     */
    public function getSeaName()
    {
        return $this->seaName;
    }
}
