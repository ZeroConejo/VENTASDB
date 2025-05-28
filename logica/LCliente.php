<?php
    require '../datos/DB.php';
    require '../interface/ICliente.php';


    class LCliente implements ICliente{
        public function guardar(Cliente $cliente){
            $db= new DB();
            $cn= $db->conectar();
            $sql="insert into cliente (nombres,apellidos,dni,celular,direccion) values (:nom,:ape,:dni,:cel,:dir)";
            $ps=$cn->prepare($sql); 
            $ps->bindParam(":nom", $cliente->getNombres());
            $ps->bindParam(":ape", $cliente->getApellidos());
            $ps->bindParam(":dni", $cliente->getDni());
            $ps->bindParam(":cel", $cliente->getCelular());
            $ps->bindParam(":dir", $cliente->getDireccion());
            $ps->execute();
        }

        public function cargar(){
            $db= new DB();
            $cn= $db->conectar();
            $sql="select * from cliente";
            $ps=$cn->prepare($sql);
            $ps->execute();
            $cliente=array();
            $filas=$ps->fetchAll();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f[3]);
                $cli->setCelular($f[4]);
                $cli->setDireccion($f[5]);
                array_push($cliente, $cli);
            }
            return $cliente;
        }

        public function borrar($IdCliente){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "delete from cliente where idcliente = :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":id", $IdCliente);
            $ps->execute();
        }

        public function modificar(Cliente $cliente){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "update cliente set nombres= :nom, apellidos= :ape, dni= :dni, celular= :cel, direccion= :dir where idcliente= :id";
            $ps = $cn->prepare($sql);
            $ps->bindParam(":id", $cliente->getIdCliente());
            $ps->bindParam(":nom", $cliente->getNombres());
            $ps->bindParam(":ape", $cliente->getApellidos());
            $ps->bindParam(":dni", $cliente->getDni());
            $ps->bindParam(":cel", $cliente->getCelular());
            $ps->bindParam(":dir", $cliente->getDireccion());
            $ps->execute();
        }
    }
?>
