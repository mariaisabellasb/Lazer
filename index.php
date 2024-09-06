<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> 
    <title>Site com Menu Lateral</title>
</head>
<body>
    <button class="menu-button" onclick="toggleMenu(event)">☰</button>

        <?php 
            include_once 'importes/menu.php';
        ?>
    <header>
        <p></p>
    </header>
    <main>
        <div class="content">
            <h1 class="titulo">CINEMUSIC</h1>
            <p class="subtitulo"> Cadastre-se em nosso site para assistir os melhores filmes e ouvir as melhores músicas da atualidade!</p>
            <img  id="logo" src="img/CINE.png">
        
        </div>
        
        <footer>
            <p>&copy; 2024 Escola Milanês. Todos os direitos reservados.</p>
        </footer>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
