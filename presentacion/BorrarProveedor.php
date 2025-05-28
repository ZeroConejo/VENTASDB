<?php
    require '../logica/LProveedor.php';
    $idProveedor=3;

    $log=new LProveedor();
    $log->borrar($idProveedor);
    echo 'Proveedor borrado';

?>