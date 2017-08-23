<?php

namespace Lefeto\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeLogement
 *
 * @ORM\Table(name="type_logement")
 * @ORM\Entity(repositoryClass="Lefeto\ReservationBundle\Repository\TypeLogementRepository")
 */
class TypeLogement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DesignationType", type="string", length=255)
     */
    private $designationType;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixType", type="float")
     */
    private $prixType;

    /**
     * @var int
     *
     * @ORM\Column(name="NombreElementType", type="integer")
     */
    private $nombreElementType;

    /**
     * @ORM\ManyToOne(targetEntity="Residence", inversedBy="typelogements")
     * @ORM\JoinColumn(name="residence_id", referencedColumnName="id")
     */
    private $residence;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set designationType
     *
     * @param string $designationType
     *
     * @return TypeLogement
     */
    public function setDesignationType($designationType)
    {
        $this->designationType = $designationType;

        return $this;
    }

    /**
     * Get designationType
     *
     * @return string
     */
    public function getDesignationType()
    {
        return $this->designationType;
    }

    /**
     * Set prixType
     *
     * @param float $prixType
     *
     * @return TypeLogement
     */
    public function setPrixType($prixType)
    {
        $this->prixType = $prixType;

        return $this;
    }

    /**
     * Get prixType
     *
     * @return float
     */
    public function getPrixType()
    {
        return $this->prixType;
    }

    /**
     * Set nombreElementType
     *
     * @param integer $nombreElementType
     *
     * @return TypeLogement
     */
    public function setNombreElementType($nombreElementType)
    {
        $this->nombreElementType = $nombreElementType;

        return $this;
    }

    /**
     * Get nombreElementType
     *
     * @return int
     */
    public function getNombreElementType()
    {
        return $this->nombreElementType;
    }

    /**
     * Set residence
     *
     * @param \Lefeto\ReservationBundle\Entity\Residence $residence
     *
     * @return TypeLogement
     */
    public function setResidence(\Lefeto\ReservationBundle\Entity\Residence $residence = null)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return \Lefeto\ReservationBundle\Entity\Residence
     */
    public function getResidence()
    {
        return $this->residence;
    }
}
