<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividades
 *
 * @ORM\Table(name="actividades")
 * @ORM\Entity
 */
class Actividades
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
     * @ORM\Column(name="actividad_curricular", type="string", length=255, nullable=false)
     */
    private $actividadCurricular;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActividadCurricular(): ?string
    {
        return $this->actividadCurricular;
    }

    public function setActividadCurricular(string $actividadCurricular): self
    {
        $this->actividadCurricular = $actividadCurricular;

        return $this;
    }


}
