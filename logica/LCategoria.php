<?php
    require '../datos/DB.php';
    require '../interface/ICategoria.php';


    class LCategoria implements ICategoria{
        public function guardar(Categoria $categoria){
            $db= new DB();
            $cn= $db->conectar();
            $sql="insert into categoria (nombre,idfamilia) values (:nom,:idfam)";
            $ps=$cn->prepare($sql); 
            $ps->bindParam(":nom", $categoria->getNombre());
            $ps->bindParam(":idfam", $categoria->getIdFamilia());
            $ps->execute();
        }

        public function cargar(){
            $db= new DB();
            $cn= $db->conectar();
            $sql="select * from categoria";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $categorias=array();
            $filas=$ps->fetchAll();
            foreach($filas as $f){
                $cat=new Categoria();
                $cat->setIdCategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdFamilia($f[2]);
                array_push($categorias, $cat);
            }
            return $categorias;
        }

        public function borrar($idcategoria){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "delete from categoria where idcategoria = :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":id", $idcategoria);
            $ps->execute();
        }

        public function modificar(Categoria $categoria){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "update categoria set nombre = :nom, idfamilia= :idfam where idcategoria = :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":nom", $categoria->getNombre());
            $ps->bindParam(":idfam", $categoria->getIdFamilia());
            $ps->execute();
        }
    }
?>
