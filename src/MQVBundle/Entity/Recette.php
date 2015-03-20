<?php

namespace MQVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MQVBundle\Entity\RecetteRepository")
 */
class Recette
{
    /**
    * @ORM\ManyToMany(targetEntity="Vin", mappedBy="recette")
    */
    private $vins;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
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
     * Set nom
     *
     * @param string $nom
     * @return Recette
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Recette
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Recette
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    
    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
     
    /**
     * Set type
     *
     * @param string $type
     * @return Recette
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vins = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    
    
    /**
     * Add vins
     *
     * @param \MQVBundle\Entity\Vin $vins
     * @return Recette
     */
    public function addVin(\MQVBundle\Entity\Vin $vins)
    {
        $this->vins[] = $vins;

        return $this;
    }

    /**
     * Remove vins
     *
     * @param \MQVBundle\Entity\Vin $vins
     */
    public function removeVin(\MQVBundle\Entity\Vin $vins)
    {
        $this->vins->removeElement($vins);
    }

    /**
     * Get vins
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVins()
    {
        return $this->vins;
    }
}
