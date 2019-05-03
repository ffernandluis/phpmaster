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
    
    define('INC','/includes/');
    require_once __DIR__.INC.'curso.inc.php'; //establece que el codigo del la ruta es obligatorio

    $curso1 = new Curso('POO en PHP','Yesi Days','3 sesiones', 10, true );

    $curso2 = new Curso('Javascript desde 0','Alvaro Felipe','6 sesiones', 0, true );
    
    echo $curso1->obtnerTitulo().'<br>';
    echo $curso1->obtenerProfesor().'<br>';

    $curso1->asignarTitulo('Nuevo Titulo del Curso'); // asiendo asignacion de un nuevo titulo por medio de encapsulamiento atraves de un setter

    echo $curso1->obtnerTitulo();

    ?>
</body>
</html>