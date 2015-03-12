<?php

namespace Acme\AlertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
* @ORM\Entity
* @ORM\Table()
*/
class Alert
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $position;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('open', 'closed', 'in progress', 'abandoned')")
     */
    protected $status;

    /**
     * @ORM\Column(type="string", length=2)
     */
    protected $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", length=6)
     */
    protected $zipCode;

    /**
     * @ORM\Column(type="integer")
     */
    protected $categoryID;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('enum1', 'enum2', 'enum3', 'enum4')")
     */
    protected $responsibility;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $confirmed;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $published;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $publishedFacebook;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(name="updated", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;

    /**
     * @ORM\Column(type="datetime")
     *  @Gedmo\Timestampable(on="update")
     */
    private $deletedOn;


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
     * Set position
     *
     * @param string $position
     * @return Alert
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Alert
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Alert
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Alert
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Alert
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Alert
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set categoryID
     *
     * @param integer $categoryID
     * @return Alert
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;

        return $this;
    }

    /**
     * Get categoryID
     *
     * @return integer 
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Set responsibility
     *
     * @param string $responsibility
     * @return Alert
     */
    public function setResponsibility($responsibility)
    {
        $this->responsibility = $responsibility;

        return $this;
    }

    /**
     * Get responsibility
     *
     * @return string 
     */
    public function getResponsibility()
    {
        return $this->responsibility;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return Alert
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Alert
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set publishedFacebook
     *
     * @param boolean $publishedFacebook
     * @return Alert
     */
    public function setPublishedFacebook($publishedFacebook)
    {
        $this->publishedFacebook = $publishedFacebook;

        return $this;
    }

    /**
     * Get publishedFacebook
     *
     * @return boolean 
     */
    public function getPublishedFacebook()
    {
        return $this->publishedFacebook;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Alert
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Alert
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deletedOn
     *
     * @param \DateTime $deletedOn
     * @return Alert
     */
    public function setDeletedOn($deletedOn)
    {
        $this->deletedOn = $deletedOn;

        return $this;
    }

    /**
     * Get deletedOn
     *
     * @return \DateTime 
     */
    public function getDeletedOn()
    {
        return $this->deletedOn;
    }
}