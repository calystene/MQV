<?php

namespace MQVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MQVBundle\Entity\ReservationRepository")
 */
class Reservation
{

    /**
   * @ORM\ManyToOne(targetEntity="MQVBundle\Entity\Caviste")
   * @ORM\JoinColumn(nullable=false)
   */
    private $caviste;
    /**
   * @ORM\ManyToOne(targetEntity="MQVBundle\Entity\Vin")
   * @ORM\JoinColumn(nullable=false)
   */
    private $vin;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateHeure", type="datetime")
     */
    private $dateHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;


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
     * Set dateHeure
     *
     * @param \DateTime $dateHeure
     * @return Reservation
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    /**
     * Get dateHeure
     *
     * @return \DateTime 
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Reservation
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set caviste
     *
     * @param \MQVBundle\Entity\Caviste $caviste
     * @return Reservation
     */
    public function setCaviste(\MQVBundle\Entity\Caviste $caviste)
    {
        $this->caviste = $caviste;

        return $this;
    }

    /**
     * Get caviste
     *
     * @return \MQVBundle\Entity\Caviste 
     */
    public function getCaviste()
    {
        return $this->caviste;
    }

    /**
     * Set vin
     *
     * @param \MQVBundle\Entity\Vin $vin
     * @return Reservation
     */
    public function setVin(\MQVBundle\Entity\Vin $vin)
    {
        $this->vin = $vin;

        return $this;
    }

    /**
     * Get vin
     *
     * @return \MQVBundle\Entity\Vin 
     */
    public function getVin()
    {
        return $this->vin;
    }
}
