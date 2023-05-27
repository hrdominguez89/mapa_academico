<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidades
 *
 * @ORM\Table(name="unidades")
 * @ORM\Entity
 */
class Unidades
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
     * @ORM\Column(name="unidad_academica", type="string", length=255, nullable=false)
     */
    private $unidadAcademica;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnidadAcademica(): ?string
    {
        return $this->unidadAcademica;
    }

    public function setUnidadAcademica(string $unidadAcademica): self
    {
        $this->unidadAcademica = $unidadAcademica;

        return $this;
    }


}
