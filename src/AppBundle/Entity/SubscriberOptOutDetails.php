<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\SubscriberDetails;


/**
 * SubscriberOptOutDetails
 *
 * @ORM\Table(name="subscriber_opt_out_details", uniqueConstraints={@ORM\UniqueConstraint(name="subsc_optout_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberOptOutDetailsRepository")
 */
class SubscriberOptOutDetails
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
     * @ORM\ManyToOne(targetEntity="SubscriberDetails")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="resourceid", type="smallint")
     */
    private $resourceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="optoutdate", type="datetime")
     */
    private $optoutdate;

    /**
     * @var string
     *
     * @ORM\Column(name="optoutid", type="string", length=50)
     */
    private $optoutid;


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
     * Set resourceid
     *
     * @param integer $resourceid
     *
     * @return SubscriberOptOutDetails
     */
    public function setResourceid($resourceid)
    {
        $this->resourceid = $resourceid;

        return $this;
    }

    /**
     * Get resourceid
     *
     * @return integer
     */
    public function getResourceid()
    {
        return $this->resourceid;
    }

    /**
     * Set optoutdate
     *
     * @param \DateTime $optoutdate
     *
     * @return SubscriberOptOutDetails
     */
    public function setOptoutdate($optoutdate)
    {
        $this->optoutdate = $optoutdate;

        return $this;
    }

    /**
     * Get optoutdate
     *
     * @return \DateTime
     */
    public function getOptoutdate()
    {
        return $this->optoutdate;
    }

    /**
     * Set optoutid
     *
     * @param string $optoutid
     *
     * @return SubscriberOptOutDetails
     */
    public function setOptoutid($optoutid)
    {
        $this->optoutid = $optoutid;

        return $this;
    }

    /**
     * Get optoutid
     *
     * @return string
     */
    public function getOptoutid()
    {
        return $this->optoutid;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\SubscriberDetails $id
     *
     * @return SubscriberOptOutDetails
     */
    public function setUser(\AppBundle\Entity\SubscriberDetails $id = null)
    {
        $this->user = $id;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\SubscriberDetails
     */
    public function getUser()
    {
        return $this->user;
    }
}
