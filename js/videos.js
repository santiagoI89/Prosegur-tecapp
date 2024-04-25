document.addEventListener("DOMContentLoaded", function() {
    var miVideo = document.getElementById("miVideo");
    var botonReproducir = document.getElementById("botonReproducir");

    botonReproducir.addEventListener("click", function(event) {
        event.preventDefault(); // Previene el envío del formulario
        if (miVideo.paused) {
            miVideo.play();
            botonReproducir.textContent = "Pausar Video";
        } else {
            miVideo.pause();
            botonReproducir.textContent = "Reproducir Video";
        }
    });
});