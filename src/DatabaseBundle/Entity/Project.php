<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="projectName", type="string", length=255)
     */
    private $projectName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=true)
     */
    private $summary;

    /**
     * @var bool
     *
     * @ORM\Column(name="realContract", type="boolean")
     */
    private $realContract;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licensingDate", type="datetime", nullable=true)
     */
    private $licensingDate;
    
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="discoveryDate", type="datetime", nullable=true)
     */
    private $discoveryDate;
    
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="geophysicsDate", type="datetime", nullable=true)
     */
    private $geophysicsDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fidDate", type="datetime", nullable=true)
     */
    private $fidDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="drillingDate", type="datetime", nullable=true)
     */
    private $drillingDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="developmentDate", type="datetime", nullable=true)
     */
    private $developmentDate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="operationalDate", type="datetime", nullable=true)
     */
    private $operationalDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nextTenderIssue", type="datetime", nullable=true)
     */
    private $nextTenderIssue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nextTenderClosed", type="datetime", nullable=true)
     */
    private $nextTenderClosed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contractAward", type="datetime", nullable=true)
     */
    private $contractAward;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="helicopterOpsDate", type="datetime", nullable=true)
     */
    private $helicopterOpsDate;

    /**
     * @var int
     *
     * @ORM\Column(name="contractEndQuarter", type="integer", nullable=true)
     */
    private $contractEndQuarter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contractEndYear", type="datetime", nullable=true)
     */
    private $contractEndYear;
    
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="contractStartDate", type="datetime", nullable=true)
     */
    private $contractStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=255, nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="optionsComment", type="text", nullable=true)
     */
    private $optionsComment;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="projectLevel", type="integer", nullable=true)
     */
    private $projectLevel;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="confidentialLink", type="text", nullable=true)
     */
    private $confidentialLink;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="externalLink", type="text", nullable=true)
     */
    private $externalLink;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\ProjectCircuit", mappedBy="project", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $circuit;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\AircraftFleet", mappedBy="project", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $aircraftFleet;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\HelicopterFleet", mappedBy="project", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $helicopterFleet;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\ProjectComment", mappedBy="project", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $projectComments;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\ProjectStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projectStatus;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OilCompany", inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $oilCompany;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Base", inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $base;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\OperatorGroup")
     * @ORM\JoinColumn(nullable=true)
     */
    private $operatorGroup;

    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\MissionArea", mappedBy="project", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $missionAreas;
    
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
     * Set projectName
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set realContract
     *
     * @param boolean $realContract
     * @return Project
     */
    public function setRealContract($realContract)
    {
        $this->realContract = $realContract;

        return $this;
    }

    /**
     * Get realContract
     *
     * @return boolean 
     */
    public function getRealContract()
    {
        return $this->realContract;
    }

    /**
     * Set licensingDate
     *
     * @param \DateTime $licensingDate
     * @return Project
     */
    public function setLicensingDate($licensingDate)
    {
        $this->licensingDate = $licensingDate;

        return $this;
    }

    /**
     * Get licensingDate
     *
     * @return \DateTime 
     */
    public function getLicensingDate()
    {
        return $this->licensingDate;
    }

    /**
     * Set fidDate
     *
     * @param \DateTime $fidDate
     * @return Project
     */
    public function setFidDate($fidDate)
    {
        $this->fidDate = $fidDate;

        return $this;
    }

    /**
     * Get fidDate
     *
     * @return \DateTime 
     */
    public function getFidDate()
    {
        return $this->fidDate;
    }

    /**
     * Set drillingDate
     *
     * @param \DateTime $drillingDate
     * @return Project
     */
    public function setDrillingDate($drillingDate)
    {
        $this->drillingDate = $drillingDate;

        return $this;
    }

    /**
     * Get drillingDate
     *
     * @return \DateTime 
     */
    public function getDrillingDate()
    {
        return $this->drillingDate;
    }

    /**
     * Set nextTenderIssue
     *
     * @param \DateTime $nextTenderIssue
     * @return Project
     */
    public function setNextTenderIssue($nextTenderIssue)
    {
        $this->nextTenderIssue = $nextTenderIssue;

        return $this;
    }

    /**
     * Get nextTenderIssue
     *
     * @return \DateTime 
     */
    public function getNextTenderIssue()
    {
        return $this->nextTenderIssue;
    }

    /**
     * Set nextTenderClosed
     *
     * @param \DateTime $nextTenderClosed
     * @return Project
     */
    public function setNextTenderClosed($nextTenderClosed)
    {
        $this->nextTenderClosed = $nextTenderClosed;

        return $this;
    }

    /**
     * Get nextTenderClosed
     *
     * @return \DateTime 
     */
    public function getNextTenderClosed()
    {
        return $this->nextTenderClosed;
    }

    /**
     * Set contractAward
     *
     * @param \DateTime $contractAward
     * @return Project
     */
    public function setContractAward($contractAward)
    {
        $this->contractAward = $contractAward;

        return $this;
    }

    /**
     * Get contractAward
     *
     * @return \DateTime 
     */
    public function getContractAward()
    {
        return $this->contractAward;
    }

    /**
     * Set helicopterOpsDate
     *
     * @param \DateTime $helicopterOpsDate
     * @return Project
     */
    public function setHelicopterOpsDate($helicopterOpsDate)
    {
        $this->helicopterOpsDate = $helicopterOpsDate;

        return $this;
    }

    /**
     * Get helicopterOpsDate
     *
     * @return \DateTime 
     */
    public function getHelicopterOpsDate()
    {
        return $this->helicopterOpsDate;
    }

    /**
     * Set contractEndQuarter
     *
     * @param integer $contractEndQuarter
     * @return Project
     */
    public function setContractEndQuarter($contractEndQuarter)
    {
        $this->contractEndQuarter = $contractEndQuarter;

        return $this;
    }

    /**
     * Get contractEndQuarter
     *
     * @return integer 
     */
    public function getContractEndQuarter()
    {
        return $this->contractEndQuarter;
    }

    /**
     * Set contractEndYear
     *
     * @param \DateTime $contractEndYear
     * @return Project
     */
    public function setContractEndYear($contractEndYear)
    {
        $this->contractEndYear = $contractEndYear;

        return $this;
    }

    /**
     * Get contractEndYear
     *
     * @return \DateTime 
     */
    public function getContractEndYear()
    {
        return $this->contractEndYear;
    }

    /**
     * Set options
     *
     * @param integer $options
     * @return Project
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return integer 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set optionsComment
     *
     * @param string $optionsComment
     * @return Project
     */
    public function setOptionsComment($optionsComment)
    {
        $this->optionsComment = $optionsComment;

        return $this;
    }

    /**
     * Get optionsComment
     *
     * @return string 
     */
    public function getOptionsComment()
    {
        return $this->optionsComment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->circuit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->aircraftFleet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->helicopterFleet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->projectComments = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add circuit
     *
     * @param \DatabaseBundle\Entity\ProjectCircuit $circuit
     * @return Project
     */
    public function addCircuit(\DatabaseBundle\Entity\ProjectCircuit $circuit)
    {
        $this->circuit[] = $circuit;
        $circuit->setProject($this);

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
     * Add aircraftFleet
     *
     * @param \DatabaseBundle\Entity\AircraftFleet $aircraftFleet
     * @return Project
     */
    public function addAircraftFleet(\DatabaseBundle\Entity\AircraftFleet $aircraftFleet)
    {
        $this->aircraftFleet[] = $aircraftFleet;
        $aircraftFleet->setProject($this);

        return $this;
    }

    /**
     * Remove aircraftFleet
     *
     * @param \DatabaseBundle\Entity\AircraftFleet $aircraftFleet
     */
    public function removeAircraftFleet(\DatabaseBundle\Entity\AircraftFleet $aircraftFleet)
    {
        $this->aircraftFleet->removeElement($aircraftFleet);
    }

    /**
     * Get aircraftFleet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAircraftFleet()
    {
        return $this->aircraftFleet;
    }

    /**
     * Add helicopterFleet
     *
     * @param \DatabaseBundle\Entity\HelicopterFleet $helicopterFleet
     * @return Project
     */
    public function addHelicopterFleet(\DatabaseBundle\Entity\HelicopterFleet $helicopterFleet)
    {
        $this->helicopterFleet[] = $helicopterFleet;

        return $this;
    }

    /**
     * Remove helicopterFleet
     *
     * @param \DatabaseBundle\Entity\HelicopterFleet $helicopterFleet
     */
    public function removeHelicopterFleet(\DatabaseBundle\Entity\HelicopterFleet $helicopterFleet)
    {
        $this->helicopterFleet->removeElement($helicopterFleet);
    }

    /**
     * Get helicopterFleet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHelicopterFleet()
    {
        return $this->helicopterFleet;
    }

    /**
     * Add projectComments
     *
     * @param \DatabaseBundle\Entity\ProjectComment $projectComments
     * @return Project
     */
    public function addProjectComment(\DatabaseBundle\Entity\ProjectComment $projectComments)
    {
        $this->projectComments[] = $projectComments;
        $projectComments->setProject($this);

        return $this;
    }

    /**
     * Remove projectComments
     *
     * @param \DatabaseBundle\Entity\ProjectComment $projectComments
     */
    public function removeProjectComment(\DatabaseBundle\Entity\ProjectComment $projectComments)
    {
        $this->projectComments->removeElement($projectComments);
    }

    /**
     * Get projectComments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjectComments()
    {
        return $this->projectComments;
    }

    /**
     * Set projectStatus
     *
     * @param \DatabaseBundle\Entity\ProjectStatus $projectStatus
     * @return Project
     */
    public function setProjectStatus(\DatabaseBundle\Entity\ProjectStatus $projectStatus)
    {
        $this->projectStatus = $projectStatus;

        return $this;
    }

    /**
     * Get projectStatus
     *
     * @return \DatabaseBundle\Entity\ProjectStatus 
     */
    public function getProjectStatus()
    {
        return $this->projectStatus;
    }

    /**
     * Set oilCompany
     *
     * @param \DatabaseBundle\Entity\ProjectStatus $oilCompany
     * @return Project
     */
    public function setOilCompany(\DatabaseBundle\Entity\OilCompany $oilCompany)
    {
        $this->oilCompany = $oilCompany;

        return $this;
    }

    /**
     * Get oilCompany
     *
     * @return \DatabaseBundle\Entity\ProjectStatus 
     */
    public function getOilCompany()
    {
        return $this->oilCompany;
    }

    /**
     * Set base
     *
     * @param \DatabaseBundle\Entity\Base $base
     * @return Project
     */
    public function setBase(\DatabaseBundle\Entity\Base $base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return \DatabaseBundle\Entity\Base 
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set operatorGroup
     *
     * @param \DatabaseBundle\Entity\OperatorGroup $operatorGroup
     * @return Project
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

    /**
     * Set country
     *
     * @param \DatabaseBundle\Entity\Country $country
     * @return Project
     */
    public function setCountry(\DatabaseBundle\Entity\Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \DatabaseBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add missionArea
     *
     * @param \DatabaseBundle\Entity\MissionArea $missionArea
     *
     * @return Project
     */
    public function addMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {
        $this->missionAreas[] = $missionArea;
        $missionArea->setProject($this);

        return $this;
    }

    /**
     * Remove missionArea
     *
     * @param \DatabaseBundle\Entity\MissionArea $missionArea
     */
    public function removeMissionArea(\DatabaseBundle\Entity\MissionArea $missionArea)
    {
        $this->missionAreas->removeElement($missionArea);
    }

    /**
     * Get missionAreas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMissionAreas()
    {
        return $this->missionAreas;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Project
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set discoveryDate
     *
     * @param \DateTime $discoveryDate
     *
     * @return Project
     */
    public function setDiscoveryDate($discoveryDate)
    {
        $this->discoveryDate = $discoveryDate;

        return $this;
    }

    /**
     * Get discoveryDate
     *
     * @return \DateTime
     */
    public function getDiscoveryDate()
    {
        return $this->discoveryDate;
    }

    /**
     * Set geophysicsDate
     *
     * @param \DateTime $geophysicsDate
     *
     * @return Project
     */
    public function setGeophysicsDate($geophysicsDate)
    {
        $this->geophysicsDate = $geophysicsDate;

        return $this;
    }

    /**
     * Get geophysicsDate
     *
     * @return \DateTime
     */
    public function getGeophysicsDate()
    {
        return $this->geophysicsDate;
    }

    /**
     * Set developmentDate
     *
     * @param \DateTime $developmentDate
     *
     * @return Project
     */
    public function setDevelopmentDate($developmentDate)
    {
        $this->developmentDate = $developmentDate;

        return $this;
    }

    /**
     * Get developmentDate
     *
     * @return \DateTime
     */
    public function getDevelopmentDate()
    {
        return $this->developmentDate;
    }

    /**
     * Set operationalDate
     *
     * @param \DateTime $operationalDate
     *
     * @return Project
     */
    public function setOperationalDate($operationalDate)
    {
        $this->operationalDate = $operationalDate;

        return $this;
    }

    /**
     * Get operationalDate
     *
     * @return \DateTime
     */
    public function getOperationalDate()
    {
        return $this->operationalDate;
    }

    /**
     * Set contractStartDate
     *
     * @param \DateTime $contractStartDate
     *
     * @return Project
     */
    public function setContractStartDate($contractStartDate)
    {
        $this->contractStartDate = $contractStartDate;

        return $this;
    }

    /**
     * Get contractStartDate
     *
     * @return \DateTime
     */
    public function getContractStartDate()
    {
        return $this->contractStartDate;
    }

    /**
     * Set projectLevel
     *
     * @param integer $projectLevel
     *
     * @return Project
     */
    public function setProjectLevel($projectLevel)
    {
        $this->projectLevel = $projectLevel;

        return $this;
    }

    /**
     * Get projectLevel
     *
     * @return integer
     */
    public function getProjectLevel()
    {
        return $this->projectLevel;
    }

    /**
     * Set confidentialLink
     *
     * @param string $confidentialLink
     *
     * @return Project
     */
    public function setConfidentialLink($confidentialLink)
    {
        $this->confidentialLink = $confidentialLink;

        return $this;
    }

    /**
     * Get confidentialLink
     *
     * @return string
     */
    public function getConfidentialLink()
    {
        return $this->confidentialLink;
    }

    /**
     * Set externalLink
     *
     * @param string $externalLink
     *
     * @return Project
     */
    public function setExternalLink($externalLink)
    {
        $this->externalLink = $externalLink;

        return $this;
    }

    /**
     * Get externalLink
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->externalLink;
    }
}
