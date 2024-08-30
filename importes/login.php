<?php
session_start(); // Iniciar a sessão

include '../banco/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Preparar e executar a consulta SQL
    $sql = "SELECT * FROM usuarios WHERE nome = ? AND senha = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("ss", $nome, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se há um resultado
    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $_SESSION['loggedin'] = true;
        $_SESSION['nome'] = $nome;
        header("Location: ../sobre.php"); // Redirecionar para uma página de boas-vindas ou painel
        exit();
    } else {
        // Login falhou
        echo "Nome ou senha incorretos.";
    }

    // Fechar a conexão
    $stmt->close();
    $connect->close();
}
?>
