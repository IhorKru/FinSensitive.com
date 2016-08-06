<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriberOptInDetails
 *
 * @ORM\Table(name="subscriber_opt_in_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriberOptInDetailsRepository")
 */
class SubscriberOptInDetails
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
     * @ORM\Column(name="resourceid", type="smallint")
     */
    private $resourceid;

    /**
     * @var bool
     *
     * @ORM\Column(name="agreetersm", type="boolean")
     */
    private $agreetersm;

    /**
     * @var bool
     *
     * @ORM\Column(name="agreeemails", type="boolean")
     */
    private $agreeemails;

    /**
     * @var bool
     *
     * @ORM\Column(name="agreepartners", type="boolean")
     */
    private $agreepartners;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="subscription_date", type="datetime")
     */
    private $subscriptionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_ip", type="string", length=25)
     */
    private $subscriptionIp;


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
     * @return SubscriberOptInDetails
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
     * Set resourceid
     *
     * @param integer $resourceid
     *
     * @return SubscriberOptInDetails
     */
    public function setResourceid($resourceid)
    {
        $this->resourceid = $resourceid;

        return $this;
    }

    /**
     * Get resourceid
     *
     * @return int
     */
    public function getResourceid()
    {
        return $this->resourceid;
    }

    /**
     * Set agreetersm
     *
     * @param boolean $agreetersm
     *
     * @return SubscriberOptInDetails
     */
    public function setAgreetersm($agreetersm)
    {
        $this->agreetersm = $agreetersm;

        return $this;
    }

    /**
     * Get agreetersm
     *
     * @return bool
     */
    public function getAgreetersm()
    {
        return $this->agreetersm;
    }

    /**
     * Set agreeemails
     *
     * @param boolean $agreeemails
     *
     * @return SubscriberOptInDetails
     */
    public function setAgreeemails($agreeemails)
    {
        $this->agreeemails = $agreeemails;

        return $this;
    }

    /**
     * Get agreeemails
     *
     * @return bool
     */
    public function getAgreeemails()
    {
        return $this->agreeemails;
    }

    /**
     * Set agreepartners
     *
     * @param boolean $agreepartners
     *
     * @return SubscriberOptInDetails
     */
    public function setAgreepartners($agreepartners)
    {
        $this->agreepartners = $agreepartners;

        return $this;
    }

    /**
     * Get agreepartners
     *
     * @return bool
     */
    public function getAgreepartners()
    {
        return $this->agreepartners;
    }

    /**
     * Set subscriptionDate
     *
     * @param \DateTime $subscriptionDate
     *
     * @return SubscriberOptInDetails
     */
    public function setSubscriptionDate($subscriptionDate)
    {
        $this->subscriptionDate = $subscriptionDate;

        return $this;
    }

    /**
     * Get subscriptionDate
     *
     * @return \DateTime
     */
    public function getSubscriptionDate()
    {
        return $this->subscriptionDate;
    }

    /**
     * Set subscriptionIp
     *
     * @param string $subscriptionIp
     *
     * @return SubscriberOptInDetails
     */
    public function setSubscriptionIp($subscriptionIp)
    {
        $this->subscriptionIp = $subscriptionIp;

        return $this;
    }

    /**
     * Get subscriptionIp
     *
     * @return string
     */
    public function getSubscriptionIp()
    {
        return $this->subscriptionIp;
    }
}

