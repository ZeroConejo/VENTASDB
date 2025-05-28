<?php
require '../logica/LCategoria.php';
$idcategoria = 2;

$log = new LCategoria();
$log->borrar($idcategoria);

echo "Categoría borrada";
?>
