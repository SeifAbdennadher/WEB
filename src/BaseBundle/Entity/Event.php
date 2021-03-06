<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="business_id", columns={"business_id"}), @ORM\Index(name="address_id", columns={"address_id"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="business_id", type="integer", nullable=true)
     */
    private $businessId;

    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=true)
     */
    private $addressId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", length=65535, nullable=true)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_url", type="text", length=65535, nullable=true)
     */
    private $photoUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_places", type="integer", nullable=true)
     */
    private $maxPlaces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="event")
     * @ORM\JoinTable(name="participant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set businessId
     *
     * @param integer $businessId
     *
     * @return Event
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;

        return $this;
    }

    /**
     * Get businessId
     *
     * @return integer
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return Event
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Event
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return Event
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Event
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set photoUrl
     *
     * @param string $photoUrl
     *
     * @return Event
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get photoUrl
     *
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * Set maxPlaces
     *
     * @param integer $maxPlaces
     *
     * @return Event
     */
    public function setMaxPlaces($maxPlaces)
    {
        $this->maxPlaces = $maxPlaces;

        return $this;
    }

    /**
     * Get maxPlaces
     *
     * @return integer
     */
    public function getMaxPlaces()
    {
        return $this->maxPlaces;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Event
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Add user
     *
     * @param \BaseBundle\Entity\User $user
     *
     * @return Event
     */
    public function addUser(\BaseBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \BaseBundle\Entity\User $user
     */
    public function removeUser(\BaseBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}
