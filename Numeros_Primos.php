<?php
/**
 * Problema de números Primos:
 * Crea una función llamada esPrimo que determine si un número dado es primo
 *  o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.
 */
function esPrimo($numero){
    //numeros menores a 2 no son primos
    if ($numero < 2) {
        return false;
    }

    //verificar la divisibilidad del numero por cualquier numero menor o igual a la raiz
    //cuadrada del numero sqrt() funcion de raiz cuadrada del parametro que recibe
    for ($i=2; $i <= sqrt($numero) ; $i++) { 
        if ($numero % $i == 0) {
            return false;
        }
    }
    // si no es divisible por ningun numero es primo
    return true;
}

$numero = readline("Ingrese un numero para verificar si es primo o no: ");
//verificar y mostrar
if (esPrimo($numero)){
    echo "$numero es un número primo \n";
} else {
    echo "$numero no es un numero Primo \n";
}
?>