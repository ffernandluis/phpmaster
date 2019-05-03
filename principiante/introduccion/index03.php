<?php
//VARIABLES

/*
Es un espacio de memoria que esta determinado por un identificador
*/
// Pueden cambiar de tipo de datos o valor segurn se requiera

//$variable = valor;
$nombre ="Luis";

// CONVENCION DE NOMBRE
/*
Es un conjunto de normas y reglas para la escritura de nombre, codigo fuente, comentarios e identificadores en programaciom, facilitan y hacen comprensible su lectura e interpretacion
*/

//CAMEL CASE: Primer letra en minuscula y las siguientes concatenadas en mayusculas

$miNombre; $miSegundoNombre;


//SMALL_CAPS:  Letra en minusculas y separadas por guiones

$mi_nombre; $mi_segundo_nombre;

//PASCAL_CASE:  Primer letra y la siguiente estan concatendas en mayusculas.

$MiNombre; $MiSegundoNombre;


//CONSTANTES

/*
 Es un valor creado en espacio de memoria que no puede ser cambiado durante la interpretacion del codigo
*/

//define(constante, valor);
define('PI', 3.141612);
define('URL','https://ed.team');

echo URL;
?>