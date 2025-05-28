<?php
    require '../logica/LCliente.php';
    $cli=new Cliente();
    $nombres="ANA";
    $apellidos="FLORES";
    $dni="23232323";
    $celular="321456789";
    $direccion="Av.UnióN";

    $cli->setNombres($nombres);
    $cli->setApellidos($apellidos);
    $cli->setDni($dni);
    $cli->setCelular($celular); 
    $cli->setDireccion($direccion);

    $log=new LCliente();
    $log->guardar($cli);
    echo "Datos Guardados";
?>