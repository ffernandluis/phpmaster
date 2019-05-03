<?php
 class Curso{
    private $titulo;
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;

    #creando nuestro construcctor
    public function __construct($titulo,$profesor,$duracion, $costo, $disponible){

        $this->titulo = $titulo;
        $this->profesor = $profesor;
        $this->duracion =$duracion;
        $this->costo = $costo;
        $this->disponible = $disponible;

    }

    #Encapsulacion
    # getter
    public function obtnerTitulo(){
        return $this->titulo;
    }
    public function obtenerProfesor(){
        return $this->profesor;
    }

    #setter
    public function asignarTitulo($titulo){
        $this->titulo = $titulo;
    }
 }

?>