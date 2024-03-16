<?php

    class Conexao
    {
        private $host= 'localhost';
        private $db='loja';
        private $user='root';
        private $pass='';
        public $conn;
        public function fazConexao() {
            try {
                $this->conn= new PDO("mysql:host={$this->host};dbname={$this->db}",$this->user,$this->pass);
            } catch (PDOException $error) {
                echo "Failure to connect to database: ".$error->getMessage();
            }
            return $this->conn;
        }
    }
    

?>