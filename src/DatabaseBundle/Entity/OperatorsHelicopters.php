<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperatorsHelicopters
 *
 * @ORM\Table(name="operators_helicopters")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OperatorsHelicoptersRepository")
 */
class OperatorsHelicopters
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\HelicopterClass", inversedBy="operatorsHelicopters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $helicopterClass;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperatorGroup", inversedBy="operatorsHelicopters")
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
     * Set quantity
     *
     * @param integer $quantity
     * @return OperatorsHelicopters
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set helicopterClass
     *
     * @param \DatabaseBundle\Entity\HelicopterClass $helicopterClass
     * @return OperatorsHelicopters
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

    /**
     * Set operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     * @return OperatorsHelicopters
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
