# Sistema de Tarefas - PHP MVC

## Como rodar

1. Instalar o XAMPP
2. Colar a pasta `projeto` dentro de `htdocs/`
3. Abrir o phpMyAdmin e importar o arquivo `database.sql`
4. Acessar `http://localhost/projeto/public/`

## Tecnologias

- PHP 7+
- MySQL
- HTML/CSS

## Padroes utilizados

- MVC (Model View Controller)
- Singleton (conexao com banco de dados)

## Estrutura

```
projeto/
├── app/
│   ├── controllers/   -> AuthController, TarefaController
│   ├── models/        -> UsuarioModel, TarefaModel
│   └── views/         -> telas do sistema
├── config/            -> configuracoes do banco
├── core/              -> classes base (App, Controller, Database)
├── public/            -> index.php, css, .htaccess
└── database.sql
```
