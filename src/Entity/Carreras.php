<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carreras
 *
 * @ORM\Table(name="carreras")
 * @ORM\Entity
 */
class Carreras
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
     * @ORM\Column(name="carrera", type="string", length=255, nullable=false)
     */
    private $carrera;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarrera(): ?string
    {
        return $this->carrera;
    }

    public function setCarrera(string $carrera): self
    {
        $this->carrera = $carrera;

        return $this;
    }



}
