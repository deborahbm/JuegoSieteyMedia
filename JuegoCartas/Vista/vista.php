<?php

/**
 * Recoge los datos del controlador y los muestra al jugador.
 * 
 * TODO: 
 * Se crearía una pantalla con varias secciones:
 *  - Caja superior que contenga la información relevante para el jugador: instrucciones y menú de control.
 *  - Caja lateral izquierda que muestre las acciones que se ejecuten en la partida del jugador, así como la puntuación acumulada.
 *  - Caja lateral derecha que muestre las acciones de la partida del simulador, con la puntuación acumulada.
 * 
 * 
 * Al configurarse para salida por consola, se excluye el desarrollo del estilo y se emplea para la entrada de datos del jugador.
 *
 */




function consultaNombre()
{
    echo "\nIntroduzca su nombre: ";
    return trim(fgets(STDIN));
}

function consultaEdad()
{
    echo "\nIntroduzca su edad: ";
    return trim(fgets(STDIN));
}

function sacarCarta()
{
    echo "\n¿Desea Plantarse o Continuar (p/c)?: ";
    return trim(fgets(STDIN));
}

?>