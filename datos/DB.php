<?php
    class DB{
        private $url = 'pgsql:host=localhost;dbname=VENTASDB';
        private $user = 'postgres';
        private $password = '123';
        
        public function conectar(){
            $cn = new PDO($this->url, $this->user, $this->password);
            return $cn;  
        }
    }
?>
