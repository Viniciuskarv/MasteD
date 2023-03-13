<?php  
    class BaseDados {
        private $utilizador;
        private $host;
        private $senha;
        private $bd;
        public function __construct() {
            $this->utilizador = "root";
            $this->host = "localhost";
            $this->senha = "";
            $this->bd = "teste1";
        }
        public function connect() {
            $link = mysql_connect($this->user, $this->host, $this->pass, $this->db);
            return $link;
        }
    }
?>