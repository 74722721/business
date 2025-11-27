const modal = document.getElementById("gameModal");
const closeBtn = document.querySelector(".close-button");

// Data de cada juego
const gamesInfo = {
    "Space Invaders": {
        description: "Defiende la Tierra eliminando oleadas de alienígenas.",
        controls: ["Mover izquierda/derecha", "Disparar"],
        difficulty: "Media",
        qr: "codigo.jpeg"
    },
    "Pac-Man": {
        description: "Come puntos y evita a los fantasmas en un laberinto clásico.",
        controls: ["Mover en 4 direcciones"],
        difficulty: "Difícil",
        qr: "codigo.jpeg"
    },
    "Tetris": {
        description: "Ordena piezas que caen y forma líneas completas.",
        controls: ["Mover", "Rotar pieza", "Acelerar caída"],
        difficulty: "Media",
        qr: "codigo.jpeg"
    }
};

// Abre modal
document.querySelectorAll(".game-card").forEach(card => {
    card.addEventListener("click", () => {
        const title = card.querySelector(".game-title").innerText;
        const info = gamesInfo[title];

        document.getElementById("modalGameTitle").innerText = title;
        document.getElementById("modalDescription").innerText = info.description;

        const controlsList = document.getElementById("modalControls");
        controlsList.innerHTML = info.controls.map(c => `<li>${c}</li>`).join("");

        document.getElementById("modalDifficulty").innerText = info.difficulty;
        document.getElementById("modalQrImage").src = info.qr;

        modal.style.display = "flex";
    });
});

// Cerrar modal
closeBtn.onclick = () => {
    modal.style.display = "none";
};

window.onclick = e => {
    if (e.target === modal) modal.style.display = "none";
};
