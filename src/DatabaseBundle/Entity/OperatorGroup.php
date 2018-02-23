<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperatorGroup
 *
 * @ORM\Table(name="operator_group")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OperatorGroupRepository")
 */
class OperatorGroup
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
     * @ORM\Column(name="operatorGroupName", type="string", length=255)
     */
    private $operatorGroupName;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\GlobalOperatorGroup", inversedBy="operatorGroups")
     * @ORM\JoinColumn(nullable=true)
     */
    private $globalOperatorGroup;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\OperatorsHelicopters", mappedBy="operatorGroup", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $operatorsHelicopters;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\Base", mappedBy="operatorGroup", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $bases;

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
     * Set operatorGroupName
     *
     * @param string $operatorGroupName
     * @return OperatorGroup
     */
    public function setOperatorGroupName($operatorGroupName)
    {
        $this->operatorGroupName = $operatorGroupName;

        return $this;
    }

    /**
     * Get operatorGroupName
     *
     * @return string 
     */
    public function getOperatorGroupName()
    {
        return $this->operatorGroupName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operatorsHelicopters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->bases = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add operatorsHelicopters
     *
     * @param \DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters
     * @return OperatorGroup
     */
    public function addOperatorsHelicopter(\DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters)
    {
        $this->operatorsHelicopters[] = $operatorsHelicopters;
        $operatorsHelicopters->setOperatorGroup($this);

        return $this;
    }

    /**
     * Remove operatorsHelicopters
     *
     * @param \DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters
     */
    public function removeOperatorsHelicopter(\DatabaseBundle\Entity\OperatorsHelicopters $operatorsHelicopters)
    {
        $this->operatorsHelicopters->removeElement($operatorsHelicopters);
    }

    /**
     * Get operatorsHelicopters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOperatorsHelicopters()
    {
        return $this->operatorsHelicopters;
    }

    /**
     * Set user
     *
     * @param \DatabaseBundle\Entity\User $user
     * @return OperatorGroup
     */
    public function setUser(\DatabaseBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \DatabaseBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add basis
     *
     * @param \DatabaseBundle\Entity\Base $basis
     *
     * @return OperatorGroup
     */
    public function addBase(\DatabaseBundle\Entity\Base $basis)
    {
        $this->bases[] = $basis;
        $basis->setOperatorGroup($this);

        return $this;
    }

    /**
     * Remove basis
     *
     * @param \DatabaseBundle\Entity\Base $basis
     */
    public function removeBase(\DatabaseBundle\Entity\Base $basis)
    {
        $this->bases->removeElement($basis);
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
     * Set globalOperatorGroup
     *
     * @param \DatabaseBundle\Entity\GlobalOperatorGroup $globalOperatorGroup
     *
     * @return OperatorGroup
     */
    public function setGlobalOperatorGroup(\DatabaseBundle\Entity\GlobalOperatorGroup $globalOperatorGroup = null)
    {
        $this->globalOperatorGroup = $globalOperatorGroup;

        return $this;
    }

    /**
     * Get globalOperatorGroup
     *
     * @return \DatabaseBundle\Entity\GlobalOperatorGroup
     */
    public function getGlobalOperatorGroup()
    {
        return $this->globalOperatorGroup;
    }
}
