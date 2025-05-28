<?php
    require '../datos/DB.php';
    require '../interface/IFamilia.php';


    class LFamilia implements IFamilia{
        public function guardar(Familia $familia){
            $db= new DB();
            $cn= $db->conectar();
            $sql="insert into familia (nombre,descripcion) values (:nom,:des)";
            $ps=$cn->prepare($sql); 
            $ps->bindParam(":nom", $familia->getNombre());
            $ps->bindParam(":des", $familia->getDescripcion());
            $ps->execute();
        }

        public function cargar(){
            $db= new DB();
            $cn= $db->conectar();
            $sql="select * from familia";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $familias=array();
            $filas=$ps->fetchAll();
            foreach($filas as $f){
                $fam=new Familia();
                $fam->setIdFamilia($f[0]);
                $fam->setNombre($f[1]);
                $fam->setDescripcion($f[2]);
                array_push($familias, $fam);
            }
            return $familias;
        }

        public function borrar($IdFamilia){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "delete from familia where idfamilia = :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":id", $IdFamilia);
            $ps->execute();
        }

        public function modificar(Familia $familia){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "update familia set nombre = :nom, descripcion = :des where idfamilia = :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":nom", $familia->getNombre());
            $ps->bindParam(":des", $familia->getDescripcion());
            $ps->bindParam(":id", $familia->getIdFamilia());
            $ps->execute();
        }
    }
?>
