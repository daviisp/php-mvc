<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nova Tarefa</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
<div class="container">
    <h2>Nova Tarefa</h2>

    <form action="<?= BASE_URL ?>TarefaController/criar" method="POST">
        <label>Titulo:</label><br>
        <input type="text" name="titulo" required><br><br>
        <label>Descricao:</label><br>
        <textarea name="descricao" rows="4" cols="40"></textarea><br><br>
        <input type="submit" value="Salvar">
    </form>
    <br>
    <a href="<?= BASE_URL ?>TarefaController/dashboard">Voltar</a>
</div>
</body>
</html>
