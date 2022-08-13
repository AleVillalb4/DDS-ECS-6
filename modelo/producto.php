<?php

require_once 'proveedor.php';

class Producto
{
    private $id;
    private $nombre;
    private $codigo;
    private $precio;
    private $marca;
    private $listProveedores = array();


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }


    public function getListProveedores()
    {
        return $this->listProveedores;
    }

    public function setProveedor($p)
    {
        $this->listProveedores[] = $p;
    }

    public function MostrarInformacion(){
        echo 'Datos del producto: <br>';
        echo 'El id del producto es: '.$this->getId().'<br>';
        echo 'El nombre del producto es: '.$this->getNombre().'<br>';
        echo 'El código del producto es: '.$this->getCodigo().'<br>';
        echo 'El precio del producto es: '.$this->getPrecio().'<br>';
        echo 'La marca del producto es: '.$this->getMarca().'<br>';
        foreach ($this->getlistProveedores() as $p) {
           echo 'Id del proveedor: '. $p->getId(). '<br>';
           echo 'Nombre del proveedor: '. $p->getNombre(). '<br>';
           echo 'El Cuil del proveedor: '. $p->getCuil(). '<br>';
           echo 'La Dirección del proveedor: '. $p->getDireccion(). '<br>';
           echo 'El Télefono del proveedor: '. $p->getTelefono(). '<br>';
        }
    } 
}

