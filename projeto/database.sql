CREATE DATABASE IF NOT EXISTS sistema_tarefas;
USE sistema_tarefas;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(255),
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    titulo VARCHAR(200),
    descricao TEXT,
    status VARCHAR(20) DEFAULT 'pendente',
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
