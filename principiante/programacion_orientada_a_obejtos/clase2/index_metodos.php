<?php
class Curso{
    public $publico = 'Public: POO Avanzado 1'; // se le puede mandar a llamar dede cualquier lugar

    private $privado = 'Privado: POO Avanzado 1';// solo puede ser accedido por los miembros de la clase

    protected $protegido = 'Protegido: POO Avanzado 1'; // por los miembros de la clase y por las clases heredadas

    function obtenerMensajePrivado(){
        return $this->privado;
    } // se hace atraves de una funcion para poder acceder a un dato de tipo privado
}


$prueba = new Curso();
echo '<p>'.$prueba->publico.'</p>';
echo '<p>'.$prueba->obtenerMensajePrivado().'</p>';

?>