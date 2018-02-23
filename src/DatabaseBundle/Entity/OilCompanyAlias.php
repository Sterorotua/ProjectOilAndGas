<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OilCompanyAlias
 *
 * @ORM\Table(name="oil_company_alias")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\OilCompanyAliasRepository")
 */
class OilCompanyAlias
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
     * @ORM\Column(name="oilCompanyAliasName", type="string", length=255)
     */
    private $oilCompanyAliasName;

    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OilCompany", inversedBy="oilCompanyAliases")
     * @ORM\JoinColumn(nullable=true)
     */
    private $oilCompanyGroup;

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
     * Set oilCompanyAliasName
     *
     * @param string $oilCompanyAliasName
     * @return OilCompanyAlias
     */
    public function setOilCompanyAliasName($oilCompanyAliasName)
    {
        $this->oilCompanyAliasName = $oilCompanyAliasName;

        return $this;
    }

    /**
     * Get oilCompanyAliasName
     *
     * @return string 
     */
    public function getOilCompanyAliasName()
    {
        return $this->oilCompanyAliasName;
    }

    /**
     * Set oilCompanyGroup
     *
     * @param \DatabaseBundle\Entity\OilCompany $oilCompanyGroup
     * @return OilCompanyAlias
     */
    public function setOilCompanyGroup(\DatabaseBundle\Entity\OilCompany $oilCompanyGroup = null)
    {
        $this->oilCompanyGroup = $oilCompanyGroup;

        return $this;
    }

    /**
     * Get oilCompanyGroup
     *
     * @return \DatabaseBundle\Entity\OilCompany 
     */
    public function getOilCompanyGroup()
    {
        return $this->oilCompanyGroup;
    }
}
