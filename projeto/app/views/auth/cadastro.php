<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
<div class="container">
    <h2>Cadastro</h2>

    <?php if(isset($erro)): ?>
        <p style="color:red"><?= $erro ?></p>
    <?php endif; ?>

    <form action="<?= BASE_URL ?>AuthController/registrar" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <a href="<?= BASE_URL ?>">Ja tenho conta</a>
</div>
</body>
</html>
