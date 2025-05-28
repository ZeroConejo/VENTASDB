<?php
    require '../logica/LCliente.php';
    $idcliente=3;

    $log=new LCliente();
    $log->borrar($idcliente);
    echo 'Cliente borrado';

?>