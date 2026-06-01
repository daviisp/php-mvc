<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
<div class="container">
    <h2>Editar Tarefa</h2>

    <form action="<?= BASE_URL ?>TarefaController/atualizar" method="POST">
        <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">
        <label>Titulo:</label><br>
        <input type="text" name="titulo" value="<?= $tarefa['titulo'] ?>" required><br><br>
        <label>Descricao:</label><br>
        <textarea name="descricao" rows="4" cols="40"><?= $tarefa['descricao'] ?></textarea><br><br>
        <label>Status:</label><br>
        <select name="status">
            <option value="pendente" <?= $tarefa['status'] == 'pendente' ? 'selected' : '' ?>>Pendente</option>
            <option value="em andamento" <?= $tarefa['status'] == 'em andamento' ? 'selected' : '' ?>>Em andamento</option>
            <option value="concluida" <?= $tarefa['status'] == 'concluida' ? 'selected' : '' ?>>Concluida</option>
        </select><br><br>
        <input type="submit" value="Atualizar">
    </form>
    <br>
    <a href="<?= BASE_URL ?>TarefaController/dashboard">Voltar</a>
</div>
</body>
</html>
