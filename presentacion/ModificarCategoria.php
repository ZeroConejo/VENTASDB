<?php
require '../logica/LCategoria.php';

$idcategoria = 2;
$nombre = "";
$idfamilia = 1;

$cat = new Categoria();
$cat->setIdCategoria($idcategoria);
$cat->setNombre($nombre);
$cat->setIdFamilia($idfamilia);

$log = new LCategoria();
$log->modificar($cat);

echo "Categoría modificada";
?>
