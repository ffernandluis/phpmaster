<?php

// QUE ES UN ARREGLO.

/*

-----Es una coleccion finita de datos multiples ordenados en filas (unidimensionales) o en columnas y filas(multidimensionales)

-----Pueden ser indexados o asociativos

//ARREGLOS INDEXADOS
---utilizan indices [0,1,2,etc]
---empezamos siempre en el indice 0 y su total empieza siempre en 1
*/


// Y se los puede declarar de la siguiente manera
// $numeros = []; o tambien $numeros = array();
//cualquiera de las dos opciones es valida.


/************************************************************/



//ARREGLOS ASOCIATIVOS
/*
---Serie de espacios que almacenan datos
---Nosotros indicamos la relacion con una llave, clave o nombre*/

//ejemplo

$lenguajes = [
    'lenguaje1'=>'PHP',
    'lenguaje2'=>'JavaScript',
    'lenguaje3'=>'Java',
    'lenguaje4'=>'Python',
    'lenguaje5'=>'C++'
];

//o tambien de otra manera

$blogs = array(
    'noticias'=>'RTLatino',
    'deporte'=>'FOXsport',
    'tecnologia'=>'Medium',
    'cultura'=>'TheNewYorkTimes'
);

echo $lenguajes['lenguaje4'];
echo '<br>';
echo $blogs['deporte'];
?>