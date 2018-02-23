<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Field
 *
 * @ORM\Table(name="field")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\FieldRepository")
 */
class Field
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
     * @ORM\Column(name="fieldName", type="string", length=255)
     */
    private $fieldName;

    /**
     * @var int
     *
     * @ORM\Column(name="breakevenPrice", type="integer")
     */
    private $breakevenPrice;


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
     * Set fieldName
     *
     * @param string $fieldName
     * @return Field
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set breakevenPrice
     *
     * @param integer $breakevenPrice
     * @return Field
     */
    public function setBreakevenPrice($breakevenPrice)
    {
        $this->breakevenPrice = $breakevenPrice;

        return $this;
    }

    /**
     * Get breakevenPrice
     *
     * @return integer 
     */
    public function getBreakevenPrice()
    {
        return $this->breakevenPrice;
    }
}
