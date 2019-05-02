<?php
//La manera mas correcta de trabajar con arreglos

#LO BASICO

//Comencemos con las funciones basicas

#array_combine($keys, $values); Ejemplos

$keys = ['sky','grass','orange'];
$values = ['blue','green','orange'];

$array_combine = array_combine($keys, $values);

print_r($array_combine);
echo $array_combine['sky'];
echo '<br>';

//ahora existen otras funciones de array que son

//Esta funcion de array_keys devuelve un array con todas las llaves de un array asociativo
print_r(array_keys($array_combine)); 

echo ' LLaves <br>';

//Tambien esta el array_values que devuelve un array con los valores de un array asociado
print_r(array_values($array_combine));

echo ' Valor <br>';

//Otra funcion array_flip lo que hace esta funcion es que intercambia los datos, las llaves a valor y los valores a llaves. 

print_r(array_flip($array_combine));
?>