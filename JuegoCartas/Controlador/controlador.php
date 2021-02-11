<?php
/**
 * Controla los datos que introduce el jugador y realiza los métodos para la gestión de los mismos.
 * Contiene los métodos necesarios para la realización del programa.
 * 
 */


//Se asigna el archivo del que procede la información por consola.
require ("Vista/vista.php");


/**
 * Almacena en la variable $jugador, el nombre y la edad introducidos.
 * Coteja si el nombre no está vacío y si la edad es superior a 18 años para permitir el comienzo del juego.
 * 
 * @return Jugador
 */
function datosJugador()
{
    do {               
        $jugador = new Jugador(consultaNombre(),consultaEdad()); 
        
    } while ((strlen($jugador->getNombre()) < 1) || ($jugador->getEdad() <= 18));
    
    return $jugador;
}


/**
 *  Arranca la partida actual del jugador.
 *  Comprueba si la puntuación actual es menor, igual o mayor a 7,5 puntos.
 *  Permite al jugador plantarse o continuar.
 * 
 * @param Object $jugador
 * @param Object $baraja
 * 
 * @return $puntos
 */
function partidaJugador($jugador, $baraja)
{
    $puntos = 0;
    
    do {
        $puntos = nuevaCarta($jugador, $baraja, $puntos, true);
        if ($puntos < 7.5) {
            do {
                $opcion=sacarCarta();
            } while ($opcion != 'p' && $opcion != 'c');
        } else {
            $opcion = 'p';
        }
    } while ($opcion == 'c' && $puntos <= 7.5);
    
    $aux = ($puntos <= 7.5 ? " se ha plantado." : " se ha pasado de puntuación.");
    echo "\n" . $jugador . $aux . "\n";
    
    return $puntos;
}

/**
 *  Arranca la partida actual del simulador.
 *  Comprueba si la puntuación actual es menor, igual o mayor a 7,5 puntos con respecto al jugador.
 *  Permite al simular plantarse o continuar en función de los datos del jugador.
 *  
 * @param Object $jugador  datos del jugador para su cotejo con el simulador.
 * @param Object $baraja   datos de la baraja con la que se juega.
 * @param float $puntosJugador    recoge los datos acumulados por el jugador para su cotejo.
 * 
 * @return $puntos  devuelve los puntos que ha sacado el simulador en la partida
 */
function partidaSimulador($jugador, $baraja, $puntosJugador)
{
    $puntos = 0;
    
    do {
        $puntos = nuevaCarta($jugador, $baraja, $puntos, false);
    } while ($puntosJugador <= 7.5 && $puntos < $puntosJugador);
    
    $resultado = ($puntos <= 7.5 ? " se ha plantado." : " se ha pasado de puntuación.");
    echo "\n" . $jugador . $resultado . "\n";
    
    return $puntos;
}

/**
 * Genera una carta al azar y la elimina del array creado en su instancia.
 * Devuelve los puntos que coinciden con dicha carta.
 * 
 * @param Object $jugador
 * @param Object $baraja
 * @param float $puntos
 * 
 * @return $puntos
 */
function nuevaCarta($jugador, &$baraja, $puntos)
{
    $cartaAzar = array_rand($baraja);
    $puntosCarta = $baraja[$cartaAzar];
    unset($baraja[$cartaAzar]);
    
    $puntos += $puntosCarta;
    $textoPuntuacion = ($puntos <= 1 ? " punto." : " puntos.");
    
    echo "\n" . $jugador . " ha pedido nueva carta\n";
    echo "\n Ha salido la carta: " . $cartaAzar . ". La puntuación total es de: " . $puntos . $textoPuntuacion ." \n";
    
    return $puntos;
}


/**
 * Comprueba los puntos del jugador y el simulador y determina quien ha ganado la partida en función de su puntuación global.
 * 
 * @param float $puntosJugador
 * @param float $puntosMaquina
 * @param Object $jugador
 * 
 * @return string $ganador devuelve el nombre de quien gane la partida.
 */
function comprobarGanador($puntosJugador, $puntosMaquina, $jugador)
{
    if (($puntosJugador <= 7.5 && $puntosJugador > $puntosMaquina) ||
        ($puntosJugador <= 7.5 && $puntosMaquina > 7.5)) {
            $ganador = $jugador;
        } else {
            $ganador = "El Simulador";
        }
        
        return "\n" . $ganador . " HA GANADO LA PARTIDA.\n";
}

/**
 * Instancia una nueva baraja para inicializar el array completo.
 * 
 * @return Baraja
 */

function crearBaraja ()
{
    $baraja = new Baraja();
    $baraja->nuevaBaraja();
    return  $baraja;
}


?>