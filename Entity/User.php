<?php

namespace Gekomod\TicketBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\OneToMany(targetEntity="Ticket", mappedBy="user_id")
     */
    protected $user_tickets;

    public function __construct()
    {
        parent::__construct();
    }



    /**
     * Add userTicket
     *
     * @param \Gekomod\TicketBundle\Entity\Ticket $userTicket
     *
     * @return User
     */
    public function addUserTicket(\Gekomod\TicketBundle\Entity\Ticket $userTicket)
    {
        $this->user_tickets[] = $userTicket;

        return $this;
    }

    /**
     * Remove userTicket
     *
     * @param \Gekomod\TicketBundle\Entity\Ticket $userTicket
     */
    public function removeUserTicket(\Gekomod\TicketBundle\Entity\Ticket $userTicket)
    {
        $this->user_tickets->removeElement($userTicket);
    }

    /**
     * Get userTickets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserTickets()
    {
        return $this->user_tickets;
    }
}