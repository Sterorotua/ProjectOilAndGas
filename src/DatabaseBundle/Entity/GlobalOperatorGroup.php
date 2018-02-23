<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalOperatorGroup
 *
 * @ORM\Table(name="global_operator_group")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\GlobalOperatorGroupRepository")
 */
class GlobalOperatorGroup
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
     * @ORM\Column(name="GlobalOperatorGroupName", type="string", length=255)
     */
    private $globalOperatorGroupName;

    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\OperatorGroup", mappedBy="globalOperatorGroup", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $operatorGroups;

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
     * Set globalOperatorGroupName
     *
     * @param string $globalOperatorGroupName
     *
     * @return GlobalOperatorGroup
     */
    public function setGlobalOperatorGroupName($globalOperatorGroupName)
    {
        $this->globalOperatorGroupName = $globalOperatorGroupName;

        return $this;
    }

    /**
     * Get globalOperatorGroupName
     *
     * @return string
     */
    public function getGlobalOperatorGroupName()
    {
        return $this->globalOperatorGroupName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->operatorGroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     *
     * @return GlobalOperatorGroup
     */
    public function addOperatorGroup(\DatabaseBundle\Entity\OperatorGroup $operatorGroup)
    {
        $this->operatorGroups[] = $operatorGroup;
        $operatorGroup->setGlobalOperatorGroup($this);

        return $this;
    }

    /**
     * Remove operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     */
    public function removeOperatorGroup(\DatabaseBundle\Entity\OperatorGroup $operatorGroup)
    {
        $this->operatorGroups->removeElement($operatorGroup);
    }

    /**
     * Get operatorGroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOperatorGroups()
    {
        return $this->operatorGroups;
    }
}
