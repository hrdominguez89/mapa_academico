<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfertaAcademica
 *
 * @ORM\Table(name="oferta_academica")
 * @ORM\Entity
 */
class OfertaAcademica
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
     * @ORM\Column(name="caracter", type="string", length=255, nullable=false)
     */
    private $caracter;

    /**
     * @var string
     *
     * @ORM\Column(name="carga_horaria", type="string", length=255, nullable=false)
     */
    private $cargaHoraria;

    /**
     * @var string
     *
     * @ORM\Column(name="contenidos_minimos", type="text", length=65535, nullable=false)
     */
    private $contenidosMinimos;

    /**
     * @var int
     *
     * @ORM\Column(name="actividad_id", type="integer", nullable=false)
     */
    private $actividadId;

    /**
     * @var int
     *
     * @ORM\Column(name="area_id", type="integer", nullable=false)
     */
    private $areaId;

    /**
     * @var int
     *
     * @ORM\Column(name="campo_id", type="integer", nullable=false)
     */
    private $campoId;

    /**
     * @var int
     *
     * @ORM\Column(name="carrera_id", type="integer", nullable=false)
     */
    private $carreraId;

    /**
     * @var int
     *
     * @ORM\Column(name="unidad_id", type="integer", nullable=false)
     */
    private $unidadId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaracter(): ?string
    {
        return $this->caracter;
    }

    public function setCaracter(string $caracter): self
    {
        $this->caracter = $caracter;

        return $this;
    }

    public function getCargaHoraria(): ?string
    {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(string $cargaHoraria): self
    {
        $this->cargaHoraria = $cargaHoraria;

        return $this;
    }

    public function getContenidosMinimos(): ?string
    {
        return $this->contenidosMinimos;
    }

    public function setContenidosMinimos(string $contenidosMinimos): self
    {
        $this->contenidosMinimos = $contenidosMinimos;

        return $this;
    }

    public function getActividadId(): ?int
    {
        return $this->actividadId;
    }

    public function setActividadId(int $actividadId): self
    {
        $this->actividadId = $actividadId;

        return $this;
    }

    public function getAreaId(): ?int
    {
        return $this->areaId;
    }

    public function setAreaId(int $areaId): self
    {
        $this->areaId = $areaId;

        return $this;
    }

    public function getCampoId(): ?int
    {
        return $this->campoId;
    }

    public function setCampoId(int $campoId): self
    {
        $this->campoId = $campoId;

        return $this;
    }

    public function getCarreraId(): ?int
    {
        return $this->carreraId;
    }

    public function setCarreraId(int $carreraId): self
    {
        $this->carreraId = $carreraId;

        return $this;
    }

    public function getUnidadId(): ?int
    {
        return $this->unidadId;
    }

    public function setUnidadId(int $unidadId): self
    {
        $this->unidadId = $unidadId;

        return $this;
    }


}
