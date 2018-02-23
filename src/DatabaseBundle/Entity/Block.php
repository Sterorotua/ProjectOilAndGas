<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Block
 *
 * @ORM\Table(name="block")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\BlockRepository")
 */
class Block
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
     * @ORM\Column(name="blockNumber", type="integer")
     */
    private $blockNumber;


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
     * Set blockNumber
     *
     * @param integer $blockNumber
     * @return Block
     */
    public function setBlockNumber($blockNumber)
    {
        $this->blockNumber = $blockNumber;

        return $this;
    }

    /**
     * Get blockNumber
     *
     * @return integer 
     */
    public function getBlockNumber()
    {
        return $this->blockNumber;
    }
}
