<?php

namespace BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreferedRelation
 *
 * @ORM\Table(name="prefered_relation", indexes={@ORM\Index(name="IDX_78596892A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class PreferedRelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="relation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $relation;

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
     * Set relation
     *
     * @param integer $relation
     *
     * @return PreferedRelation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return integer
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Set user
     *
     * @param \BaseBundle\Entity\User $user
     *
     * @return PreferedRelation
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
