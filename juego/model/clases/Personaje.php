<?php


class Personaje{
    private $table = "personajes";
    private $conexion;

    private $id;
    private $nombre;
    private $spray;
    private $atk;
    private $def;
    private $vel;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getSpray()
    {
        return $this->spray;
    }

    /**
     * @return mixed
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @return mixed
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * @return mixed
     */
    public function getVel()
    {
        return $this->vel;
    }

    public function getDetalles(){

        $consulta = $this->conexion->prepare("SELECT * FROM personajes WHERE id = ? ");
        $consulta->bindPAram(1, $this->id);
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        $this->conexion = null;
        return $resultados;

    }



}