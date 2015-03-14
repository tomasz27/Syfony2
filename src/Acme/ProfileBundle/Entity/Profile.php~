<?php
 namespace Acme\ProfileBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Gedmo\Mapping\Annotation as Gedmo;

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
    protected $avatarPath;

    /**
     * @ORM\Column(type="integer")
     */
    protected $ggNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $notofication;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $notoficationEmail;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $notoficationCommunicator;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createdOn", type="datetime")
     */
    private $createdOn;

    /**
     * @ORM\Column(name="updatedOn", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedOn;

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
     * Set avatarPath
     *
     * @param string $avatarPath
     * @return Profile
     */
    public function setAvatarPath($avatarPath)
    {
        $this->avatarPath = $avatarPath;

        return $this;
    }

    /**
     * Get avatarPath
     *
     * @return string 
     */
    public function getAvatarPath()
    {
        return $this->avatarPath;
    }

    /**
     * Set ggNumber
     *
     * @param integer $ggNumber
     * @return Profile
     */
    public function setGgNumber($ggNumber)
    {
        $this->ggNumber = $ggNumber;

        return $this;
    }

    /**
     * Get ggNumber
     *
     * @return integer 
     */
    public function getGgNumber()
    {
        return $this->ggNumber;
    }

    /**
     * Set notofication
     *
     * @param boolean $notofication
     * @return Profile
     */
    public function setNotofication($notofication)
    {
        $this->notofication = $notofication;

        return $this;
    }

    /**
     * Get notofication
     *
     * @return boolean 
     */
    public function getNotofication()
    {
        return $this->notofication;
    }

    /**
     * Set notoficationEmail
     *
     * @param boolean $notoficationEmail
     * @return Profile
     */
    public function setNotoficationEmail($notoficationEmail)
    {
        $this->notoficationEmail = $notoficationEmail;

        return $this;
    }

    /**
     * Get notoficationEmail
     *
     * @return boolean 
     */
    public function getNotoficationEmail()
    {
        return $this->notoficationEmail;
    }

    /**
     * Set notoficationCommunicator
     *
     * @param boolean $notoficationCommunicator
     * @return Profile
     */
    public function setNotoficationCommunicator($notoficationCommunicator)
    {
        $this->notoficationCommunicator = $notoficationCommunicator;

        return $this;
    }

    /**
     * Get notoficationCommunicator
     *
     * @return boolean 
     */
    public function getNotoficationCommunicator()
    {
        return $this->notoficationCommunicator;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Profile
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn
     *
     * @param \DateTime $updatedOn
     * @return Profile
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return \DateTime 
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }
}
