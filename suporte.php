<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
            <h1>Página de suporte</h1>
            <p>Em caso de problema, entre em contato com nossos especialistas, pelo nosso e-mail.</p>
            <p> cinemusic2024@gmail.com </p>
        </div>
        
        <footer>
            <p>&copy; CINEMUSIC</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
