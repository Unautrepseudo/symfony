<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FriendRepository")
 */
class Friend
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
    private $dimitru;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $miyako;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $castormalin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDimitru(): ?string
    {
        return $this->dimitru;
    }

    public function setDimitru(?string $dimitru): self
    {
        $this->dimitru = $dimitru;

        return $this;
    }

    public function getMiyako(): ?string
    {
        return $this->miyako;
    }

    public function setMiyako(?string $miyako): self
    {
        $this->miyako = $miyako;

        return $this;
    }

    public function getCastormalin(): ?string
    {
        return $this->castormalin;
    }

    public function setCastormalin(?string $castormalin): self
    {
        $this->castormalin = $castormalin;

        return $this;
    }
}
