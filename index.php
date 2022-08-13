<?php

require_once 'modelo/producto.php';

$pr =new Proveedor();
$pr-> setId(1);
$pr->setNombre('Ruben');
$pr->setCuil('33-4654898-9');
$pr->setDireccion('Callao 323');
$pr->setTelefono('341 21651565');

$pr1 =new Proveedor();
$pr1-> setId(2);
$pr1->setNombre('Carmen');
$pr1->setCuil('22-4654898-7');
$pr1->setDireccion('Italia 493');
$pr1->setTelefono('3465 491565');

$pr2 =new Proveedor();
$pr2-> setId(3);
$pr2->setNombre('Gloria');
$pr2->setCuil('15-7984898-3');
$pr2->setDireccion('San Luis 55');
$pr2->setTelefono('3430 7716485');

$p1 = new Producto();
$p1 -> setId(3);
$p1 -> setNombre('Cera');
$p1 -> setCodigo('CR-33');
$p1 -> setPrecio(700);
$p1 ->setMarca('Mr. Musculo');
$p1 ->setProveedor($pr);
$p1->setProveedor($pr1);
$p1->setProveedor($pr2);
$p1->MostrarInformacion();



