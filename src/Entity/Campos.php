<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campos
 * @ORM\Entity(repositoryClass="App\Repository\CamposRepository")
 * @ORM\Table(name="campos")
 * @ORM\Entity
 */
class Campos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="campo", type="string", length=255, nullable=false)
     */
    private $campo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampo(): ?string
    {
        return $this->campo;
    }

    public function setCampo(string $campo): self
    {
        $this->campo = $campo;

        return $this;
    }



}
