<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfertaAcademica
 *
 * @ORM\Table(name="oferta_academica", indexes={@ORM\Index(name="actividad_id", columns={"actividad_id", "area_id", "campo_id", "carrera_id", "unidad_id"}), @ORM\Index(name="area_id", columns={"area_id"}), @ORM\Index(name="oferta_academica_ibfk_5", columns={"unidad_id"}), @ORM\Index(name="area_id_2", columns={"area_id"}), @ORM\Index(name="oferta_academica_ibfk_3", columns={"campo_id"}), @ORM\Index(name="area_id_3", columns={"area_id"}), @ORM\Index(name="oferta_academica_ibfk_4", columns={"carrera_id"}), @ORM\Index(name="IDX_172E40806014FACA", columns={"actividad_id"})})
 * @ORM\Entity
 */
class OfertaAcademica
{
    /**
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="caracter", type="string", length=255, nullable=false)
     */
    private $caracter;

    /**
     *
     * @ORM\Column(name="carga_horaria", type="string", length=255, nullable=false)
     */
    private $cargaHoraria;

    /**
     *
     * @ORM\Column(name="contenidos_minimos", type="text", length=65535, nullable=false)
     */
    private $contenidosMinimos;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Campos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campo_id", referencedColumnName="id")
     * })
     */
    private $campo;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Areas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Carreras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrera_id", referencedColumnName="id")
     * })
     */
    private $carrera;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Actividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividad_id", referencedColumnName="id")
     * })
     */
    private $actividad;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Unidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidad_id", referencedColumnName="id")
     * })
     */
    private $unidad;

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

    public function getCampo(): ?Campos
    {
        return $this->campo;
    }

    public function setCampo(?Campos $campo): self
    {
        $this->campo = $campo;

        return $this;
    }

    public function getArea(): ?Areas
    {
        return $this->area;
    }

    public function setArea(?Areas $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCarrera(): ?Carreras
    {
        return $this->carrera;
    }

    public function setCarrera(?Carreras $carrera): self
    {
        $this->carrera = $carrera;

        return $this;
    }

    public function getActividad(): ?Actividades
    {
        return $this->actividad;
    }

    public function setActividad(?Actividades $actividad): self
    {
        $this->actividad = $actividad;

        return $this;
    }

    public function getUnidad(): ?Unidades
    {
        return $this->unidad;
    }

    public function setUnidad(?Unidades $unidad): self
    {
        $this->unidad = $unidad;

        return $this;
    }

}
