function mostrarMensajePredeterminado(decision) {
    var mensajeTextArea = document.getElementById("mensajeTextArea");
    var mensaje = "";

    // Evaluar la decisión y asignar el mensaje correspondiente
    if (decision === 1) {
        mensaje = "Ha seleccionado la opción 1. Este es el mensaje para la opción 1.";
    } else if (decision === 2) {
        mensaje = "Ha seleccionado la opción 2. Este es el mensaje para la opción 2.";
    } else {
        mensaje = "Mensaje predeterminado para otras opciones.";
    }

    // Asignar el mensaje al valor del textarea
    mensajeTextArea.value = mensaje;
}
