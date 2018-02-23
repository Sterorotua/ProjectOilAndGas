<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationalMode
 *
 * @ORM\Table(name="operational_mode")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OperationalModeRepository")
 */
class OperationalMode
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
     * @ORM\Column(name="modeComment", type="text", nullable=true)
     */
    private $comment;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\ProjectCircuit", mappedBy="operationalMode", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $circuit;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Alternate")
     * @ORM\JoinColumn(nullable=true)
     */
    private $alternate;

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
     * Constructor
     */
    public function __construct()
    {
        $this->circuit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add circuit
     *
     * @param \DatabaseBundle\Entity\ProjectCircuit $circuit
     * @return OperationalMode
     */
    public function addCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {
        $this->circuit[] = $circuit;
        $circuit->setOperationalMode($this);

        return $this;
    }

    /**
     * Remove circuit
     *
     * @param \DatabaseBundle\Entity\ProjectCircuit $circuit
     */
    public function removeCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {
        $this->circuit->removeElement($circuit);
    }

    /**
     * Get circuit
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set alternate
     *
     * @param \DatabaseBundle\Entity\Alternate $alternate
     *
     * @return OperationalMode
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
     * Set comment
     *
     * @param string $comment
     *
     * @return OperationalMode
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
