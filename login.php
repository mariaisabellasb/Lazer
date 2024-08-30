<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="autentica.css" rel="stylesheet">
    <title>Site com Menu Lateral</title>
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
            <div class="signup-container">
                <h2>Entrar</h2>
                <form method="post" action="importes/login.php">
                    <input placeholder="Nome" type="text" name="nome" required><br>
                    <input placeholder="Senha" type="password" name="senha" required><br>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
        
        <footer>
            <p>&copy; CINEMUSIC</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
