<?php

/**
 * Clase Jugador.
 * 
 * Constructor con parámetros de entrada que se recogen en vista.php
 * 
 * Contiene variables con métodos accesores get y set.
 * Permiten realizar la confirmación incial del jugador.
 * @param $nombre   Requerido para comenzar partida.
 * @param $edad     Requiere un número mayor o igual a 18 para comenzar partida.
 *
 */

class Jugador {
    
    private $nombre;
    private $edad;
    
    
    public function __construct( $nombre,  $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return number
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param number $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    
}
?>