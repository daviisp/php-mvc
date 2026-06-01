<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>

    <?php if(isset($erro)): ?>
        <p style="color:red"><?= $erro ?></p>
    <?php endif; ?>

    <form action="<?= BASE_URL ?>AuthController/login" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Entrar">
    </form>
    <br>
    <a href="<?= BASE_URL ?>AuthController/cadastro">Nao tem conta? Cadastre-se</a>
</div>
</body>
</html>
