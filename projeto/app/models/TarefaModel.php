<?php

class TarefaModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstancia()->getConexao();
    }

    public function listar($usuario_id) {
        $stmt = $this->db->prepare("SELECT * FROM tarefas WHERE usuario_id = ? ORDER BY criado_em DESC");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function buscarPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM tarefas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function criar($usuario_id, $titulo, $descricao) {
        $stmt = $this->db->prepare("INSERT INTO tarefas (usuario_id, titulo, descricao) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $usuario_id, $titulo, $descricao);
        return $stmt->execute();
    }

    public function atualizar($id, $titulo, $descricao, $status) {
        $stmt = $this->db->prepare("UPDATE tarefas SET titulo = ?, descricao = ?, status = ? WHERE id = ?");
        $stmt->bind_param("sssi", $titulo, $descricao, $status, $id);
        return $stmt->execute();
    }

    public function deletar($id) {
        $stmt = $this->db->prepare("DELETE FROM tarefas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
