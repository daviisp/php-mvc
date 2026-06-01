<?php

class Database {

    private static $instancia = null;
    private $conexao;

    private function __construct() {
        $this->conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conexao->connect_error) {
            die("Erro ao conectar: " . $this->conexao->connect_error);
        }
        $this->conexao->set_charset("utf8");
    }

    public static function getInstancia() {
        if (self::$instancia == null) {
            self::$instancia = new Database();
        }
        return self::$instancia;
    }

    public function getConexao() {
        return $this->conexao;
    }
}
