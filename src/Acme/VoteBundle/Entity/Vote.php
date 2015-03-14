<?php

namespace Acme\VoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Vote
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $alertId;

    /**
     * @ORM\OneToOne(targetEntity="Alert")
     * @ORM\Column(type="integer")
     */
    protected $vote;


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
     * Set alertId
     *
     * @param integer $alertId
     * @return Vote
     */
    public function setAlertId($alertId)
    {
        $this->alertId = $alertId;

        return $this;
    }

    /**
     * Get alertId
     *
     * @return integer 
     */
    public function getAlertId()
    {
        return $this->alertId;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     * @return Vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return integer 
     */
    public function getVote()
    {
        return $this->vote;
    }
}
