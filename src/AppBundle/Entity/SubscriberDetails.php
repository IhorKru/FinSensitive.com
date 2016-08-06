<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriberDetails
 *
 * @ORM\Table(name="SubscriberDetails", uniqueConstraints={@ORM\UniqueConstraint(name="subscriber_pkey", columns={"id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberDetailsRepository")
 */
class SubscriberDetails
{
    private $subscriberoptipdetails;
            
    public function __construct()
    {
        $this->subscriberoptipdetails = new ArrayCollection();
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
     *
     * @ORM\Column(name="FirstName", type="string", length=100)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=100)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailAddress", type="string", length=100)
     */
    private $emailaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=50)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="Age", type="smallint")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="Gender", type="smallint", nullable=true)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="EducationLevelId", type="smallint")
     */
    private $educationlevelid;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255)
     */
    private $hash;
    
}

