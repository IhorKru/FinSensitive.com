<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriberOptOutDetail
 *
 * @ORM\Table(name="subscriber_opt_out_detail")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberOptOutDetailRepository")
 */
class SubscriberOptOutDetail
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
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="resource_id", type="smallint")
     */
    private $resourceId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OptOutDate", type="datetime")
     */
    private $optOutDate;

    /**
     * @var string
     *
     * @ORM\Column(name="OptOutIP", type="string", length=100)
     */
    private $optOutIP;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return SubscriberOptOutDetail
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set resourceId
     *
     * @param integer $resourceId
     *
     * @return SubscriberOptOutDetail
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Get resourceId
     *
     * @return int
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Set optOutDate
     *
     * @param \DateTime $optOutDate
     *
     * @return SubscriberOptOutDetail
     */
    public function setOptOutDate($optOutDate)
    {
        $this->optOutDate = $optOutDate;

        return $this;
    }

    /**
     * Get optOutDate
     *
     * @return \DateTime
     */
    public function getOptOutDate()
    {
        return $this->optOutDate;
    }

    /**
     * Set optOutIP
     *
     * @param string $optOutIP
     *
     * @return SubscriberOptOutDetail
     */
    public function setOptOutIP($optOutIP)
    {
        $this->optOutIP = $optOutIP;

        return $this;
    }

    /**
     * Get optOutIP
     *
     * @return string
     */
    public function getOptOutIP()
    {
        return $this->optOutIP;
    }
}

