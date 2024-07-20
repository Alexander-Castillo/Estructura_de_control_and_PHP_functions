<?php
/**
 * Problema de Palíndromos:
 * Implementa una función llamada esPalindromo que determine si una cadena de texto dada
 *  es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en
 *  ambas direcciones
 */
function esPalindromo($cadena){
    // str_replace() eliminar espacios y strtolower() convertir a minuscula para realizar comparacion
    $cadena = strtolower(str_replace(' ','',$cadena));
    // comparar la cadena original con su reverso strrev()
    return $cadena === strrev($cadena);
}
$texto = readline("Ingresa una cadena de texto para verificar si es un palindromo: ");
// verificar y mostrar si la cadena es un palindromo
if (esPalindromo($texto)) {
    echo "\"$texto\" es un palindromo \n";
} else {
    echo "\"$texto\" no es un palindromo \n";
}
?>