<?php


class PersonajesController{
    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__ . "/../model/clases/Conexion.php";
        require_once __DIR__ . "/../model/clases/Personaje.php";

        $this->conectar=new Conexion();
        $this->conexion=$this->conectar->conexion();
    }

    public function view($vista,$datos){
        $personajes = $datos["personajes"];
        require_once  __DIR__ . "/../view/" . $vista . "View.php";

    }

    /*Acciones;*/
    public function run($accion){
        try{
            $this->$accion();
        }
        catch (Error $e){
            $this->index();
        }
    }

    public function index(){
        require_once  __DIR__ . "/../view/uiView.php";
    }

    public function play(){
        $personaje=new Personaje($this->conexion);
        $personaje->setId(1);
        $personajes=$personaje->getDetalles();
        $this->view("play",array(
            "personajes"=>$personajes,
        ));

    }

}