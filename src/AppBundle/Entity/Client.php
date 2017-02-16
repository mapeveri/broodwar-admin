<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $phone;

    /**
     * @ORM\Column(type="text")
     */
    private $extra;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reparation", mappedBy="client")
     */
    private $reparations;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reparations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString() {
        return $this->name;
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
     * Set name
     *
     * @param string $name
     *
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set extra
     *
     * @param string $extra
     *
     * @return Client
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Add reparation
     *
     * @param \AppBundle\Entity\Reparation $reparation
     *
     * @return Client
     */
    public function addReparation(\AppBundle\Entity\Reparation $reparation)
    {
        $this->reparations[] = $reparation;

        return $this;
    }

    /**
     * Remove reparation
     *
     * @param \AppBundle\Entity\Reparation $reparation
     */
    public function removeReparation(\AppBundle\Entity\Reparation $reparation)
    {
        $this->reparations->removeElement($reparation);
    }

    /**
     * Get reparations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReparations()
    {
        return $this->reparations;
    }
}
