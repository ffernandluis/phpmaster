<?php
$numeros = [];
$numero =array();

//las dos maneras de crear un arreglo

//echo $numeros;
//PHP me puede mandar un error porqur hay que convertir primero a cadena

var_dump($numeros); 
echo "<br>";
print_r($numeros);

//Arreglos indexados

$dias = ['Lunes','Martes','Miercoles','Jueves','Viernes'];
var_dump($dias);
echo "<br>";
//print_r($dias);
echo $dias[3]."<br>";

//Para agregar un nuevo valor al array
$dias[]= 'Sabado';
var_dump($dias);

//Para agregar el valor en una posicion especifica
$dias[6]= 'Dia libre';
echo $dias[6];

//CREACION DE ARREGLOS ASOCIATIVOS
echo '<br><br><br>';
$usuario = [
    'nombre'=>'Luis',
    'edad'=>22,
    'casado'=>false
];
var_dump($usuario);
echo 'My name is '.$usuario['nombre'];


// ARREGLOS MULTIDIMENSIONALES

#SE PUEDE CREAR UN ARREGLO CON VARIOS ARREGLOS A DENTRO

$alumnos = array(
    array('Juan', 20, 'Mexico'), #fila 1 
    array('Jose', 22, 'Bolivia'), #fil 2 
    array('Maria', 18, 'Argentina') #fila 3 
);
echo '<br><br><br>';

//Viendo como se muestra en el navegador
var_dump($alumnos);
?>