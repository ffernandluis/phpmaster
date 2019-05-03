<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Orientada a Objetos Avanzado</title>
</head>
<body>
    <?php
    
    require_once __DIR__.'/includes/global.inc.php'; //establece que el codigo del la ruta es obligatorio

    #instanciar  un estudiante
    $estudiante = new Estudiante('Yesi','Days','silvercorp@gmail.com');#nombra vacio para probar el try catch

    //var_dump($estudiante);
    echo '<p>'.$estudiante->bienvenida().'</p>';
    echo '<p>'.$estudiante->despedida().'</p>';
    echo '<p>'.$estudiante->validarCompra().'</p>';

    echo "<br>";
    echo $estudiante::MONEDA; 

    #instanciar un profesor

    $profesor = new Profesor('Jon','Mircha','jonmircha@gmail.com');

    //var_dump($profesor);
    echo '<p>'.$profesor->bienvenida().'</p>';
    echo '<p>'.$profesor->despedida().'</p>';
    echo "<br>";
    echo $profesor::MONEDA; 
    ?>
</body>
</html>