<?php
    require '../logica/LFamilia.php';
    $fam=new Familia();
    $nombre="FRUTOS SECOS";
    $descripcion="TODO FRUTOS SECOS";

    $fam->setNombre($nombre);
    $fam->setDescripcion($descripcion);

    $log=new LFamilia();
    $log->guardar($fam);
    echo "Datos Guardados";
?>