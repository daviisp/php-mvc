<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
<div class="container">
    <h2>Bem vindo, <?= $_SESSION['usuario_nome'] ?></h2>
    <a href="<?= BASE_URL ?>AuthController/logout">Sair</a>
    <hr>
    <h3>Minhas Tarefas</h3>
    <a href="<?= BASE_URL ?>TarefaController/nova">+ Nova Tarefa</a>
    <br><br>

    <?php if(empty($tarefas)): ?>
        <p>Nenhuma tarefa cadastrada.</p>
    <?php else: ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Status</th>
                <th>Data</th>
                <th>Acoes</th>
            </tr>
            <?php foreach($tarefas as $t): ?>
            <tr>
                <td><?= $t['id'] ?></td>
                <td><?= $t['titulo'] ?></td>
                <td><?= $t['descricao'] ?></td>
                <td><?= $t['status'] ?></td>
                <td><?= $t['criado_em'] ?></td>
                <td>
                    <a href="<?= BASE_URL ?>TarefaController/editar/<?= $t['id'] ?>">Editar</a> |
                    <a href="<?= BASE_URL ?>TarefaController/deletar/<?= $t['id'] ?>" onclick="return confirm('Tem certeza?')">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
