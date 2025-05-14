const videos = [
    "{{ asset('videos/beach.mp4') }}", // Usa la función asset() para generar la ruta
    "{{ asset('videos/frio.mp4') }}",
    "{{ asset('videos/montanya.mp4') }}",
];

let indiceActual = 0;
const videoElement = document.getElementById("reelVideo");

function cargarVideo(index) {
    videoElement.src = videos[index];
    videoElement.play(); // Inicia la reproducción
}

videoElement.addEventListener("ended", () => {
    indiceActual = (indiceActual + 1) % videos.length; // Pasa al siguiente
    cargarVideo(indiceActual);
});

// Inicia el reel con el primer video
cargarVideo(indiceActual);