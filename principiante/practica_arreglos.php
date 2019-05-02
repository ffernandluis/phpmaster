<?php
#1
$nombre = 'Luis';
$lista = array(
    1,2,3,'casa',$nombre
);

//sacando el numeor de elementos que contiene el array
$longitud = count($lista);

//Ahora recorriendo los elementos con un bucle
for($i=0;$i<$longitud;$i++){
    //mostrando el valor de cada elemento del array
    echo $lista[$i];
    echo '<br>';
}

#2 arreglos asociativos

$equipo = array(
    'portero'=>'Juan',
    'defensa'=>'Salah',
    'medio'=>'Pique',
    'delantero'=>'Messi'
);

foreach($equipo as $posicion=>$jugador){
    echo 'El '.$posicion.' es '.$jugador;
    echo '<br>';
}


#3 Arreglos bidimensional (multidimensional)

$equipo_futbol = array(
    array('Rooney','Chicharito','Gigs'),
    array('Suarez'),
    array('Torres','Terry','Etoo')
);

foreach($equipo_futbol as $equipo){
    echo 'En este equipo juegan: ';
    foreach($equipo as $jugador){
        echo $jugador.' ';
    }
    echo '<br>';
}



#4 Arreglls tridimensionales (multidimensional)

$datos = array(
    array(
        array(0,0,0),
        array(0,0,1),
        array(0,0,2)
    ),
    array(
        array(0,1,0),
        array(0,1,1),
        array(0,1,2)
    ),
    array(
        array(0,2,2),
        array(0,2,1),
        array(0,2,2)
    )
);
// Recorriendo el array tridimensional

foreach($datos as $datos2){
    foreach($datos2 as $datos3){
        foreach($datos3 as $dato){
            echo $dato;
        }
        echo '<br>';
    }
    echo '<br>';
}
?>