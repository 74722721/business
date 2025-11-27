<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade Retro</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div class="app-wrapper">
<div class="container">

<header class="header">
    <h1 class="title">ARCADE RETRO</h1>
    <p class="subtitle">🎮 Los Clásicos Nunca Mueren 🎮</p>
</header>

<main class="games-grid">

    <article class="game-card">
        <div class="game-icon">👾</div>
        <h2 class="game-title">Space Invaders</h2>
        <p class="game-description">¡Protege la Tierra de los invasores alienígenas!</p>
        <button class="play-button">JUGAR</button>
    </article>

    <article class="game-card">
        <div class="game-icon">🟡</div>
        <h2 class="game-title">Pac-Man</h2>
        <p class="game-description">Come puntos y evita a los fantasmas.</p>
        <button class="play-button">JUGAR</button>
    </article>

    <article class="game-card">
        <div class="game-icon">🧱</div>
        <h2 class="game-title">Tetris</h2>
        <p class="game-description">Encaja piezas y forma líneas.</p>
        <button class="play-button">JUGAR</button>
    </article>

</main>

<footer class="payment-section">
    <h2 class="payment-title">Apóyanos con Yape</h2>
    <p class="payment-text">Escanea el código QR para donar a Jaasiel Flores Rivera</p>

    <div class="qr-placeholder">
        <img src="codigo.jpeg" alt="Código QR">
    </div>
</footer>

</div>
</div>

<!-- MODAL -->
<div id="gameModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>

        <h2 id="modalGameTitle">Título del Juego</h2>
        <p id="modalDescription" class="modal-text"></p>

        <h3 class="modal-subtitle">Controles</h3>
        <ul id="modalControls" class="modal-list"></ul>

        <h3 class="modal-subtitle">Dificultad</h3>
        <p id="modalDifficulty" class="modal-text"></p>

        <img id="modalQrImage" class="modal-qr" src="" alt="QR">

        <button class="modal-play-btn">Jugar ahora 🚀</button>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
