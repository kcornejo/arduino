<?php

namespace SoporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campo
 *
 * @ORM\Table(name="bitacora")
 * @ORM\Entity
 */
class Bitacora {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_hora", type="datetime", nullable=false)
     */
    private $fecha_hora;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura", type="string", nullable=true)
     */
    private $temperatura;

    /**
     * @var string
     *
     * @ORM\Column(name="humedad", type="string", nullable=true)
     */
    private $humedad;

    /**
     * @var string
     *
     * @ORM\Column(name="presion", type="string", nullable=true)
     */
    private $presion;

    /**
     * @var string
     *
     * @ORM\Column(name="luminosidad", type="string", nullable=true)
     */
    private $luminosidad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_viento", type="string", nullable=true)
     */
    private $direccion_viento;

    function getId() {
        return $this->id;
    }

    function getFecha_hora() {
        return $this->fecha_hora;
    }

    function getTemperatura() {
        return $this->temperatura;
    }

    function getHumedad() {
        return $this->humedad;
    }

    function getPresion() {
        return $this->presion;
    }

    function getLuminosidad() {
        return $this->luminosidad;
    }

    function getDireccion_viento() {
        return $this->direccion_viento;
    }

    function setFecha_hora($fecha_hora) {
        $this->fecha_hora = $fecha_hora;
    }

    function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

    function setHumedad($humedad) {
        $this->humedad = $humedad;
    }

    function setPresion($presion) {
        $this->presion = $presion;
    }

    function setLuminosidad($luminosidad) {
        $this->luminosidad = $luminosidad;
    }

    function setDireccion_viento($direccion_viento) {
        $this->direccion_viento = $direccion_viento;
    }

}
