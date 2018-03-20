<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UurroosterRepository")
 */
class Uurrooster
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $van;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tot;

    /**
     * @ORM\Column(type="text")
     */
    private $beschrijving;

    public function getId()
    {
        return $this->id;
    }

    public function getVan(): ?\DateTimeInterface
    {
        return $this->van;
    }

    public function setVan(\DateTimeInterface $van): self
    {
        $this->van = $van;

        return $this;
    }

    public function getTot(): ?\DateTimeInterface
    {
        return $this->tot;
    }

    public function setTot(\DateTimeInterface $tot): self
    {
        $this->tot = $tot;

        return $this;
    }

    public function getBeschrijving(): ?string
    {
        return $this->beschrijving;
    }

    public function setBeschrijving(string $beschrijving): self
    {
        $this->beschrijving = $beschrijving;

        return $this;
    }
}
