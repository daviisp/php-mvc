<?php

class TarefaController extends Controller {

    private $tarefaModel;

    public function __construct() {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: ' . BASE_URL);
            exit;
        }
        $this->tarefaModel = $this->model('TarefaModel');
    }

    public function dashboard() {
        $tarefas = $this->tarefaModel->listar($_SESSION['usuario_id']);
        $this->view('tasks/dashboard', ['tarefas' => $tarefas]);
    }

    public function nova() {
        $this->view('tasks/nova');
    }

    public function criar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $this->tarefaModel->criar($_SESSION['usuario_id'], $titulo, $descricao);
            header('Location: ' . BASE_URL . 'TarefaController/dashboard');
        }
    }

    public function editar($id) {
        $tarefa = $this->tarefaModel->buscarPorId($id);
        $this->view('tasks/editar', ['tarefa' => $tarefa]);
    }

    public function atualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $status = $_POST['status'];
            $this->tarefaModel->atualizar($id, $titulo, $descricao, $status);
            header('Location: ' . BASE_URL . 'TarefaController/dashboard');
        }
    }

    public function deletar($id) {
        $this->tarefaModel->deletar($id);
        header('Location: ' . BASE_URL . 'TarefaController/dashboard');
    }
}
