<?php

#Interfaces -> implements
interface Requerimiento{
    public function asignarRequerimiento($listado);
    public function obtenerRequerimiento();
}

interface Conocimiento {
    public function asignarConocimiento($listado);
    public function obtenerConocimiento();
}

 class Curso implements Requerimiento, Conocimiento{
    private $titulo;
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;
    private $listado;
    #atributo estatico
    public static $moneda = 'USD';
    public static $bienvenida = 'Hola a mi curso de POO';
    #creando nuestro construcctor
    public function __construct($titulo,$profesor,$duracion, $costo, $disponible){

        $this->titulo = $titulo;
        $this->profesor = $profesor;
        $this->duracion =$duracion;
        $this->costo = $costo;
        $this->disponible = $disponible;

    }
/*
    public function __destruct(){
        echo 'Destruyendo'.$this->titulo.'<br/>';
    }
*/
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

    #implementar las funciones de esas interfaces

    public function asignarRequerimiento($listado){
        $this->listado = $listado;
    }
    public function obtenerRequerimiento(){
        if(!empty($this->listado)){
            foreach ($this->listado as $lista) {
                echo '<p>'.$lista.'</p>';
            }
        }
    }

    public function asignarConocimiento($listado){}

    public function obtenerConocimiento(){}

    static function obtenerDenominacion(){
        return self::$moneda;
    }

    public function bienvenida(){
        return self::$bienvenida;
    }
 }

?>