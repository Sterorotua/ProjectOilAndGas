<?php

namespace DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="DatabaseBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     * 
     * @Assert\NotBlank(message="Please enter user's first name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     * 
     * @Assert\NotBlank(message="Please user's last name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    private $lastName;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\ProjectComment", mappedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $projectComments;
    
    /**
     * @ORM\OneToMany(targetEntity="DatabaseBundle\Entity\HelicopterComment", mappedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $helicopterComments;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=true)
     */
    private $service;
    
    /**
     * @ORM\ManyToOne(targetEntity="DatabaseBundle\Entity\BusinessArea")
     * @ORM\JoinColumn(nullable=true)
     */
    private $businessArea;

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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->projectComments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->helicopterComments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projectComments
     *
     * @param \DatabaseBundle\Entity\ProjectComment $projectComments
     * @return User
     */
    public function addProjectComment(\DatabaseBundle\Entity\ProjectComment $projectComments)
    {
        $this->projectComments[] = $projectComments;
        $projectComments->setUser($this);

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
     * Add helicopterComments
     *
     * @param \DatabaseBundle\Entity\HelicopterComment $helicopterComments
     * @return User
     */
    public function addHelicopterComment(\DatabaseBundle\Entity\HelicopterComment $helicopterComments)
    {
        $this->helicopterComments[] = $helicopterComments;
        $helicopterComments->setUser($this);

        return $this;
    }

    /**
     * Remove helicopterComments
     *
     * @param \DatabaseBundle\Entity\HelicopterComment $helicopterComments
     */
    public function removeHelicopterComment(\DatabaseBundle\Entity\HelicopterComment $helicopterComments)
    {
        $this->helicopterComments->removeElement($helicopterComments);
    }

    /**
     * Get helicopterComments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHelicopterComments()
    {
        return $this->helicopterComments;
    }

    /**
     * Set service
     *
     * @param \DatabaseBundle\Entity\Service $service
     * @return User
     */
    public function setService(\DatabaseBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \DatabaseBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set businessArea
     *
     * @param \DatabaseBundle\Entity\BusinessArea $businessArea
     * @return User
     */
    public function setBusinessArea(\DatabaseBundle\Entity\BusinessArea $businessArea = null)
    {
        $this->businessArea = $businessArea;

        return $this;
    }

    /**
     * Get businessArea
     *
     * @return \DatabaseBundle\Entity\BusinessArea 
     */
    public function getBusinessArea()
    {
        return $this->businessArea;
    }
    
    /**
     * Get email address
     * 
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }
    
    /**
     * Get account status
     * 
     * @return string
     */
    public function getEnabled(){
        return $this->enabled;
    }
    
    public function getParent(){
        return 'FOSUserBundle';
    }

}
