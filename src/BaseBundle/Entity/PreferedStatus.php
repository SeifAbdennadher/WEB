<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreferedStatus
 *
 * @ORM\Table(name="prefered_status", indexes={@ORM\Index(name="IDX_80085692A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class PreferedStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $status;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set status
     *
     * @param integer $status
     *
     * @return PreferedStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \BaseBundle\Entity\User $user
     *
     * @return PreferedStatus
     */
    public function setUser(\BaseBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BaseBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
