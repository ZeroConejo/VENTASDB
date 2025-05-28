<?php
    require '../datos/DB.php';
    require '../interface/IProveedor.php';

    class LProveedor implements IProveedor{
        public function guardar(Proveedor $proveedor){
            $db= new DB();
            $cn= $db->conectar();
            $sql="insert into proveedor (nombre,ruc) values (:nom,:ruc)";
            $ps=$cn->prepare($sql); 
            $ps->bindParam(":nom", $proveedor->getNombre());
            $ps->bindParam(":ruc", $proveedor->getRuc());
            $ps->execute();
        }

        public function cargar(){
            $db= new DB();
            $cn= $db->conectar();
            $sql="select * from proveedor";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $proveedor=array();
            $filas=$ps->fetchAll();
            foreach($filas as $f){
                $pro=new Proveedor();
                $pro->setIdProveedor($f[0]);
                $pro->setNombre($f[1]);
                $pro->setRuc($f[2]);
                array_push($proveedor, $pro);
            }
            return $proveedor;
        }
    }
?>
