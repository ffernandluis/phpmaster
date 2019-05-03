<?php
class Curso{

    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    public function imprimirInfo(){
        return 'El nombre del curso es '.$this->nombre. ' y quien imparte el curso es '.$this->profesor;
    }

    public function validaDisponibilidad(){
        if($this->disponible == true){
            return 'El curso esta disponible';
        }
        else {
             return 'El curso no esta disponible';
        }
    }

}

$php = new Curso();
$php->nombre = 'PDO en PHP';
$php->duracion = '3 sesiones';
$php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = false;
$php->imprimirInfo();
//echo $php->imprimirInfo();
echo $php->validaDisponibilidad();

//var_dump($php);

//instanciando un nuevo obejto
$javascript = new Curso();
$javascript->nombre = 'Javascript desde 0';
$javascript->duracion = '6 sesiones';
$javascript->costo = 0;
$javascript->moneda = 'USD';
$javascript->profesor = 'Alvaro Felipe';
$javascript->disponible = true;
$javascript->imprimirInfo();
//echo $javascript->imprimirInfo();
echo $javascript->validaDisponibilidad();
//var_dump($javascript);
?>