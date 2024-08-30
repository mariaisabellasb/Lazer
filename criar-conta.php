<?php
include 'banco/conexao.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmacao_senha = $_POST['confirmacao_senha'];

    if ($senha === $confirmacao_senha) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";

        if (mysqli_query($connect, $sql)) {
            $message = "<div class='message success'>Cadastro realizado com sucesso.</div>";
        } else {
            $message = "<div class='message error'>Erro: " . mysqli_error($connect) . "</div>";
        }
    } else {
        $message = "<div class='message error'>Senhas não conferem.</div>";
    }

    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    
    <title>Site com Menu Lateral</title>

    <link href="autentica.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> 
</head>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

        <?php 
            include_once 'importes/menu.php';
        ?>
    <header>
        <p>CINEMUSIC</p>
    </header>
    <main>
        <div class="content">
            <body>
                <div class="signup-container">
                    <h2>Cadastro de Usuário</h2>
                    <form method="post" action="">
                        Nome: <input type="text" name="nome" required><br>
                        Senha: <input type="password" name="senha" required><br>
                        Confirmar Senha: <input type="password" name="confirmacao_senha" required><br>
                        <input type="submit" value="Cadastrar">
                    </form>
                    <?php echo $message; ?>
                </div>
            </body>
        </div>
</html>
<script src="scripts.js"></script>
