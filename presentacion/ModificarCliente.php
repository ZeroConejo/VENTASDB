<?php 
    require '../logica/LCliente.php';
    $idcliente= 4;
    $nombres= "JUANITO";
    $ape= "CASTILLOS";
    $dni="15151515";
    $celular="123987654";
    $direccion="Av. UnióN";

    $cli = new Cliente();
    $cli->setIdCliente($idcliente);
    $cli->setNombres($nombres);
    $cli->setApellidos($ape);
    $cli->setDni($dni);
    $cli->setCelular($celular);
    $cli->setDireccion($direccion);

    $log = new LCliente();
    $log->modificar($cli);
    echo "Datos Modificados";
?>