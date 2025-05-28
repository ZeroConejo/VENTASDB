<?php
    class Cliente{
        private $idcliente;
        private $nombres;
        private $apellidos;
        private $dni;
        private $celular;
        private $direccion;

        public function getIdCliente(){
            return $this->idcliente;
        }
        public function setIdCliente($idcliente){
            $this->idcliente=$idcliente;
        }

        public function getNombres(){
            return $this->nombres;
        }

        public function setNombres($nombres){
            $this->nombres = $nombres;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function getDni(){
            return $this->dni;
        }

        public function setDni($dni){
            $this->dni = $dni;
        }

        public function getCelular(){
            return $this->celular;
        }

        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function getDireccion(){
            return $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
    }
?>