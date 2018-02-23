<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="serviceAcronym", type="string", length=255)
     */
    private $serviceAcronym;

    /**
     * @var string
     *
     * @ORM\Column(name="serviceName", type="string", length=255)
     */
    private $serviceName;


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
     * Set serviceAcronym
     *
     * @param string $serviceAcronym
     * @return Service
     */
    public function setServiceAcronym($serviceAcronym)
    {
        $this->serviceAcronym = $serviceAcronym;

        return $this;
    }

    /**
     * Get serviceAcronym
     *
     * @return string 
     */
    public function getServiceAcronym()
    {
        return $this->serviceAcronym;
    }

    /**
     * Set serviceName
     *
     * @param string $serviceName
     * @return Service
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string 
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }
}
