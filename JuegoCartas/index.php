<?php

/**
 * @author  Déborah Blas Muñoz
 *  Main del juego.
 */

//Se asignan los archivos que contienen la información del programa.
require ("Controlador/controlador.php");
require ("Modelo/baraja.php");
require ("Modelo/jugador.php");
require_once 'Vista/vista.php'; 


echo "\n    *******    Bienvenid@ al juego de las 7 y media    *******     
\n En este juego un único jugador se enfrenta al sistema.
 \n - El objetivo del jugador es pedir cartas hasta alcanzar 7,5 puntos sin pasarse.
 \n - El objetivo de la máquina es superar siempre al jugador.
 \n - Si empatan a 7,5 puntos gana la máquina.
 \n - Disponemos de 4 palos (bastos,copas,espadas,oros), con diez cartas cada una: As,2,3,4,5,6,7,Sota,Caballo y Rey.
 \n - Las 7 primeras cartas valen su valor (As =1, 2 =2, ...), las figuras valen 0,5 puntos.
 \n - Se emplea una baraja española común a la que se debe de acceder de forma aleatoria y no se pueden repetir las cartas.\n
\n *******  Para comenzar será necesario que introduzca su nombre de usuario y su edad.*******
\n *******  CUIDADO: Deberá ser mayor de 18 años para continuar.*******\n";

$jugador = datosJugador();

do {
    $baraja = crearBaraja();    
    echo "\n   HOLA:  " . $jugador->getNombre() . "\n La partida va a empezar!\n";
    $puntosJugador = partidaJugador($jugador->getNombre(), $baraja->getBaraja(), true);
    $puntosMaquina = partidaSimulador("Es el turno del Simulador",$baraja->getBaraja(), $puntosJugador);
    echo comprobarGanador($puntosJugador, $puntosMaquina, $jugador->getNombre());
    do {
        echo "\n¿Desea Repetir o Abandonar el juego? (r/a): ";
        $opcion = strtolower(trim(fgets(STDIN)));
    } while ($opcion != 'r' && $opcion != 'a');
} while ($opcion == 'r');

echo "\nFin del juego. Gracias por haber jugado. Hasta pronto!\n";


?>