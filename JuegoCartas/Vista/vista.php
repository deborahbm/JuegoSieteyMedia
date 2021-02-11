<?php

/**
 * Recoge los datos del controlador y los muestra al jugador.
 * 
 * TODO: 
 * Se crear�a una pantalla con varias secciones:
 *  - Caja superior que contenga la informaci�n relevante para el jugador: instrucciones y men� de control.
 *  - Caja lateral izquierda que muestre las acciones que se ejecuten en la partida del jugador, as� como la puntuaci�n acumulada.
 *  - Caja lateral derecha que muestre las acciones de la partida del simulador, con la puntuaci�n acumulada.
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
    echo "\n�Desea Plantarse o Continuar (p/c)?: ";
    return trim(fgets(STDIN));
}

?>