<?php

class UsuarioModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstancia()->getConexao();
    }

    public function cadastrar($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        return $stmt->execute();
    }

    public function buscarPorEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function emailExiste($email) {
        $stmt = $this->db->prepare("SELECT id FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->num_rows > 0;
    }
}
