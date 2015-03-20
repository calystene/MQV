<?php

namespace MQVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MQVBundle\Entity\VentesRepository")
 */
class Ventes
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
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;


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
     * Set prix
     *
     * @param float $prix
     * @return Ventes
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set caviste
     *
     * @param \MQVBundle\Entity\Caviste $caviste
     * @return Ventes
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
     * @return Ventes
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
