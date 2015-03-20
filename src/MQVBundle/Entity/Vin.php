<?php

namespace MQVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MQVBundle\Entity\VinRepository")
 */
class Vin
{
    /**
 * @ORM\ManyToMany(targetEntity="Recette", inversedBy="vin")
 * @ORM\JoinTable(name="vin_recette")
 */
private $recettes;
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
     * @ORM\Column(name="millesime", type="string", length=255)
     */
    private $millesime;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;


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
     * @return Vin
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
     * Set millesime
     *
     * @param string $millesime
     * @return Vin
     */
    public function setMillesime($millesime)
    {
        $this->millesime = $millesime;

        return $this;
    }

    /**
     * Get millesime
     *
     * @return string 
     */
    public function getMillesime()
    {
        return $this->millesime;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Vin
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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
     * Set photo
     *
     * @param string $photo
     * @return Vin
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
     * Constructor
     */
    public function __construct()
    {
        $this->recettes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recettes
     *
     * @param \MQVBundle\Entity\Recette $recettes
     * @return Vin
     */
    public function addRecette(\MQVBundle\Entity\Recette $recettes)
    {
        $this->recettes[] = $recettes;

        return $this;
    }

    /**
     * Remove recettes
     *
     * @param \MQVBundle\Entity\Recette $recettes
     */
    public function removeRecette(\MQVBundle\Entity\Recette $recettes)
    {
        $this->recettes->removeElement($recettes);
    }

    /**
     * Get recettes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecettes()
    {
        return $this->recettes;
    }
}
