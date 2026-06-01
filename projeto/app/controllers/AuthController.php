<?php

class AuthController extends Controller {

    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = $this->model('UsuarioModel');
    }

    public function index() {
        $this->view('auth/login');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = $this->usuarioModel->buscarPorEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                header('Location: ' . BASE_URL . 'TarefaController/dashboard');
            } else {
                $erro = "Email ou senha incorretos.";
                $this->view('auth/login', ['erro' => $erro]);
            }
        }
    }

    public function cadastro() {
        $this->view('auth/cadastro');
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if ($this->usuarioModel->emailExiste($email)) {
                $erro = "Este email ja esta cadastrado.";
                $this->view('auth/cadastro', ['erro' => $erro]);
                return;
            }

            $this->usuarioModel->cadastrar($nome, $email, $senha);
            header('Location: ' . BASE_URL);
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL);
    }
}
