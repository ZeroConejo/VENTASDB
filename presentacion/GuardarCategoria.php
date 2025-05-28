<?php
    require '../logica/LCategoria.php';
    $cat=new Categoria();
    $nombre="YOGURT";
    $idfamilia="2";

    $cat->setNombre($nombre);
    $cat->setIdFamilia($idfamilia);

    $log=new LCategoria();
    $log->guardar($cat);
    echo "Datos Guardados";
?>