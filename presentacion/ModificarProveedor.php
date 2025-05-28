<?php 
    require '../logica/LProveedor.php';
    $idProveedor = 3;
    $nombre = "PEPSI";
    $ruc = "20202020";

    $pro = new Proveedor();
    $pro->setIdProveedor($idProveedor);
    $pro->setNombre($nombre);
    $pro->setRuc($ruc);

    $log = new LProveedor();
    $log->modificar($pro);
    echo "Datos Modificados";
?>