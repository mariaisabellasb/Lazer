<?php
session_start();
$loggedin = isset($_SESSION['loggedin']) && $_SESSION['loggedin'];
?>
<nav id="sidebar">
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="criar-conta.php">Criar Conta</a></li>
        <?php if ($loggedin): ?>
            <li><a href="logout.php">Sair</a></li>
            <li><a href="perfil.php">Perfil</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
        <li><a href="suporte.php">Suporte</a></li>
    </ul>
</nav>
