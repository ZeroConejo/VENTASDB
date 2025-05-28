<?php
    require '../logica/LFamilia.php';
    $idFamilia=3;

    $log=new LFamilia();
    $log->borrar($idFamilia);
    echo 'Familia borrado';

?>