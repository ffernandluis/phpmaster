<?php
// PRACTICA DE VARIABLES

#Reglas
$nombre = 'Luis';
$_nombre = 'Luis';

//Las variables en php son sensibles a mayusculas y minusculas
$color= 'rojo';
$Color= 'rojo';


$entero =123;
$negativo= -100;
$flotante = 13.1212;
echo $entero." ".$negativo." ".$flotante."<br>";


$octal=0755; //493
$hexadecimal = 0xC4E; //3150
$binario = 0b1010; //10

echo $octal." ".$hexadecimal." ".$binario."<br>";

$nombre ="Luis";
$apellido = "Rojas";
$edad = 22;
$soltero =true;

echo gettype($nombre)."<br>";

var_dump($edad);
?>