<?php
 namespace Acme\ProfileBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $login;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $email;

    /**
     * @ORM\Column(type="integer")
     */
    protected $groupId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $profileId;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $lastLogin;
}