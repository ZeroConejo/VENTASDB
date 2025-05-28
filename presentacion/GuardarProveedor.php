<?php
    require '../logica/LProveedor.php';
    $pro=new Proveedor();
    $nombre="COCACOLA";
    $ruc="10101010";

    $pro->setNombre($nombre);
    $pro->setRuc($ruc);

    $log=new LProveedor();
    $log->guardar($pro);
    echo "Datos Guardados";
?>