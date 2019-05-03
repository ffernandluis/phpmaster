<?php


trait Compra{
    private $compra;
    function validarCompra(){
        return "Compra Exitosa";
    }
}


class Persona{

    use Compra; #Podemos agregar mas parametros separados por comas, y siempre dentro de la super clase

    const MONEDA = "USD";

    public $nombre;
    public $apellido;
    public $email;

    public function __construct($nombre,$apellido,$email){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        
        $this->validaNombre($this->nombre);
        /*
        try{
            algo
            //Codigo podria causar una excepcion o error
        }catch(Exception $e){ cualquier nombre a $e
            //Codigo que se ejecuta si  hay una excepcion
            //Si lago no puedes hacer entonces caturame.
        }
        */

        /*
        try {
            if(empty ($this->nombre) ){
                throw new Exception("Debes ingresar tu nombre");
            } else {
                $this->nombre = $nombre;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        */
        
        $this->correoValido($this->email);
    }

    public function validaNombre($nombre){

    }

    public function correoValido($email){
        #filter_var
        #FILTER_NOMBRE_VALIDACION

        try {
            #nombre@dominio.terminacion

            if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
                #465656, hola mundo,  sdfd@.com
                throw new Exception('Correo no valido');
            }
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function bienvenida(){
        $this->validaNombre($thi
        ->nombre);
        return "Bienvenido {$this->nombre} a EDteam";
        #return 'Bienvenido'.$this->nombre.' a EDteam';
    }

    final public function despedida(){
        return "Hasta pronto {$this->nombre}";
    }

}
?>