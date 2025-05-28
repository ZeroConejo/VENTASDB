<?php 
    require '../logica/LFamilia.php';
    $idfamilia= 1;
    $nombre= "";
    $des= "";

    $fam = new Familia();
    $fam->setIdFamilia($idfamilia);
    $fam->setNombre($nombre);
    $fam->setDescripcion($des);

    $log = new LFamilia();
    $log->modificar($fam);
    echo "Datos Modificados";
?>