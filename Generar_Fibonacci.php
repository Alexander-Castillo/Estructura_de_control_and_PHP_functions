<?php 
/**
 * Problema de la serie Fibonacci:
 * Escribe una función llamada generar Fibonacci que reciba un número n como parámetro 
 * y genere los primeros n términos de la serie Fibonacci. 
 * La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos
 * anteriores.
 */
function generarFibonacci($n){
    //inicalizar la serie con los dos primeros terminos 0 y 1
    $fibonacci = [0, 1];

    //generar los siguientes terminos hasta llegar a $n
    for ($i=2; $i < $n; $i++) { 
        # El siguiente termino es la suma de los dos terminos anteriores 
        # $fibonacci[$i - 1] + $fibonacci[$i - 2] calcula el siguiente término de la secuencia sumando los dos términos anteriores.
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    // retorna la serie generada: array_slice() devuelve una porcion de un array permitiendo extraer un rango especifico de elementos,
    // $fibonacci es el array del cual se extrae una porcion, 0 (offset) indica que la extraccion comenzara desde el indice 0 $n especifica hasta donde extraera
    return array_slice($fibonacci, 0, $n);
}

// leer $n de terminos desde la consola
$n = readline("Ingrese el numero de terminos de la serie fibonacci: ");

// generar y mostrar la serie
$serie = generarFibonacci($n);
// implode() Devuelve un string que contiene la representación de todos los elementos del array en el mismo orden, con el string 'glue' entre cada elemento
echo "Los primeros $n terminos de la serie Fibonacci son: " . implode(", ", $serie) . "\n";
?>