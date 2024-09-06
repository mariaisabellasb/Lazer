<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Perfil do Usuário</title>
</head>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

    <?php include_once 'importes/menu.php'; ?>
    
    <main>
        <header class="cabecalho">
            <p>CINEMUSIC</p>
        </header>
        <div class="content">
            <h1>Perfil do Usuário</h1>
            <img src="uploads/<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="Foto de Perfil" width="150">
            
            <form action="perfil.php" method="post" enctype="multipart/form-data">
                <input class="btn-form" type="file" name="profile_picture" accept="image/*">
                <button type="submit" name="upload">Upload Foto de Perfil</button>
            </form>

            <form action="perfil.php" method="post">
                <label>Nome de Usuário:</label>
                <input  class="btn-form" type="text" name="nome" value="<?php echo htmlspecialchars($user['nome']); ?>" required>
                <label>Nova Senha:</label>
                <input   class="btn-form" type="password" name="senha">
                <button type="submit" name="update">Atualizar Dados</button>
            </form>

            <form action="perfil.php" method="post">
                <button type="submit" name="delete">Excluir Conta</button>
            </form>

            <a href="logout.php">Sair</a>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>
