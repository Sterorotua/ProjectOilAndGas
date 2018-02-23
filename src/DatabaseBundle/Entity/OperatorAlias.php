<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperatorAlias
 *
 * @ORM\Table(name="operator_alias")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OperatorAliasRepository")
 */
class OperatorAlias
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
     * @ORM\Column(name="operatorAliasName", type="string", length=255)
     */
    private $operatorAliasName;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperatorGroup")
     * @ORM\JoinColumn(nullable=false)
     */
    private $operatorGroup;

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
     * Set operatorAliasName
     *
     * @param string $operatorAliasName
     * @return OperatorAlias
     */
    public function setOperatorAliasName($operatorAliasName)
    {
        $this->operatorAliasName = $operatorAliasName;

        return $this;
    }

    /**
     * Get operatorAliasName
     *
     * @return string 
     */
    public function getOperatorAliasName()
    {
        return $this->operatorAliasName;
    }

    /**
     * Set operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     * @return OperatorAlias
     */
    public function setOperatorGroup(\DatabaseBundle\Entity\OperatorGroup $operatorGroup)
    {
        $this->operatorGroup = $operatorGroup;

        return $this;
    }

    /**
     * Get operatorGroup
     *
     * @return \DatabaseBundle\Entity\OperatorGroup 
     */
    public function getOperatorGroup()
    {
        return $this->operatorGroup;
    }
}
