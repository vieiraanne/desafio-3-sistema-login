<?php
session_start();
$erro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $cor = $_POST["cor"];
    if ($usuario == "usuario" && $senha == "senha") {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["cor"] = $cor;
        header("Location: 15d_perfil.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de usuários</title>
</head>
<body>
    <h2>Login de usuários</h2>
    <?php
    if ($erro != "") {
        echo $erro;
    }
    ?>
    <form method="POST">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required>
        <br><br>
        <label for="cor">Cor de Fundo:</label><br>
        <select id="cor" name="cor">
            <option>Branco</option>
            <option>Preto</option>
            <option>Azul</option>
            <option>Verde</option>
        </select>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>