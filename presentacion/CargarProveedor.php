<?php
    require '../logica/LProveedor.php';
    $log=new LProveedor();
    foreach($log->cargar() as $proveedor){
        echo $proveedor->getNombre();
    }
?>