<?php
class Estudiante extends Persona{

    public function __construct($nombre, $apellido,$email){

        parent::__construct($nombre, $apellido, $email);
    }
    #sobreescribir
    public function bienvenida(){
        return "Bienvenido {$this->nombre}, tenemos nuevos cursos para ti";
    }
}


?>