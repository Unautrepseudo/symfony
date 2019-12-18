<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BouquetinRepository")
 */
class Bouquetin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $boubou;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dimitriu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chameau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $guineepig;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBoubou(): ?string
    {
        return $this->boubou;
    }

    public function setBoubou(?string $boubou): self
    {
        $this->boubou = $boubou;

        return $this;
    }

    public function getDimitriu(): ?string
    {
        return $this->dimitriu;
    }

    public function setDimitriu(?string $dimitriu): self
    {
        $this->dimitriu = $dimitriu;

        return $this;
    }

    public function getChameau(): ?string
    {
        return $this->chameau;
    }

    public function setChameau(?string $chameau): self
    {
        $this->chameau = $chameau;

        return $this;
    }

    public function getGuineepig(): ?string
    {
        return $this->guineepig;
    }

    public function setGuineepig(?string $guineepig): self
    {
        $this->guineepig = $guineepig;

        return $this;
    }
}
