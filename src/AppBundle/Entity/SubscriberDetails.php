<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriberDetails
 *
 * @ORM\Table(name="Subscriber_Details", uniqueConstraints={@ORM\UniqueConstraint(name="subsc_details_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberDetailsRepository")
 */
class SubscriberDetails
{
    
    protected $optindetails;
            
    public function __construct()
    {
        $this->optindetails = new ArrayCollection();
    }
    
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
     * @Assert\NotBlank (message="Complete First Name field")
     * @ORM\Column(name="FirstName", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     * @Assert\NotBlank (message="Complete Last Name field")
     * @ORM\Column(name="LastName", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     * @Assert\NotBlank (message="Complete Email Address field")
     * @ORM\Column(name="EmailAddress", type="string", length=100)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true,
     *     checkHost = true
     * )
     */
    private $emailAddress;

    /**
     * @var string
     * @Assert\NotBlank (message="Complete Mobile Phone field")
     * @ORM\Column(name="Phone", type="string", length=50)
     * @Assert\Length(min=5) (message="Phone lenght must be over 5 characters")
     */
    private $phone;

    /**
     * @var int
     * @Assert\GreaterThanOrEqual("18", message="You must be 18 or over to subscribe")
     * @Assert\NotBlank (message="Complete Age field")
     * @ORM\Column(name="Age", type="smallint")
     * 
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="Gender", type="smallint")
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="EducationLevelID", type="smallint")
     */
    private $educationLevelID;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255)
     */
    private $hash;


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
     *
     * @return SubscriberDetails
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
     *
     * @return SubscriberDetails
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
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return SubscriberDetails
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return SubscriberDetails
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return SubscriberDetails
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return SubscriberDetails
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set educationLevelID
     *
     * @param integer $educationLevelID
     *
     * @return SubscriberDetails
     */
    public function setEducationLevelID($educationLevelID)
    {
        $this->educationLevelID = $educationLevelID;

        return $this;
    }

    /**
     * Get educationLevelID
     *
     * @return integer
     */
    public function getEducationLevelID()
    {
        return $this->educationLevelID;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return SubscriberDetails
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }
    
    public function getOptindetails()
    {
        return $this->optindetails;
    }
    
    public function setOptindetails(ArrayCollection $optindetails)
    {
        $this->optindetails = $optindetails;
    }
}
