<?php
class Productos{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    const iva = 1.21;

    public function setId(int $id){
        $this->id = $id;
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    public function setUnidades(int $unidades){
        $this->unidades = $unidades;
    }
    public function setPrecio(float $precio){
        $this->precio = $precio;
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getUnidades(){
        return $this->unidades;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function factura (){
        return $this->unidades*$this->precio*(self::iva);
    }
    

}