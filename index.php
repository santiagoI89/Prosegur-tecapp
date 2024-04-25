<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosegur tecapp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .titulo{
            color: #000000;
        
        }
        .fondos{
            background-color: #FAC807;
            
        
        }
        /* Estilo para el encabezado de la tarjeta */
        .color1{
            background-color: #bba62d; /* Cambia el fondo a un tono de azul */
            color: #000000; /* Cambia el color del texto a blanco */
            font-weight: bold; /* Hace que el texto sea negrita */
            text-align: center; /* Centra el texto horizontalmente */
            padding: 10px; /* Añade un poco de espacio alrededor del encabezado */
            border: none; 
        }
        .color2{
            background-color: #ccc; /* Cambia el fondo a un tono de azul */
            color: #000000; /* Cambia el color del texto a blanco */
            font-weight: bold; /* Hace que el texto sea negrita */
            text-align: center; /* Centra el texto horizontalmente */
            padding: 10px; /* Añade un poco de espacio alrededor del encabezado */
            border: none; 
        }
        h1 {
            text-align: center;
        }
        .PNeo{
            color: #000000;
            text-align: center;
        }
        .container1{
            display: flex; /* Utilizamos flexbox para alinear elementos */
            justify-content: center;
            align-items: center; /* Centra verticalmente los elementos */
        }
        
        /* Estilo para la imagen */
        .imagen {
            width: 100px; /* Define el ancho de la imagen */
            height: auto; /* Ajusta la altura automáticamente para mantener la proporción */
            text-align: left;
        }
        .card img {
            width: 20%; /* Hace que la imagen ocupe todo el ancho de la tarjeta */
            height: 10%; /* Ajusta la altura automáticamente para mantener la proporción */
            display: block; /* Evita espacios no deseados debajo de la imagen */
            margin: 0 auto; /* Centra la imagen horizontalmente dentro de la tarjeta */
        }
        .btn-error {
            background-color: red; /* Fondo rojo */
            color: white; /* Texto blanco para resaltar */
            padding: 10px 20px; /* Ajuste de relleno */
            border: none; /* Sin borde */
            cursor: pointer;
        }
        .centrar-imagen {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh; /* Ajusta la altura según tus necesidades */
        }
        .container2 {
            text-align: center;
            padding: 40px;
            background-color: #FAC807;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        textarea {
            width: 75%;
            height: 350px;
            resize: none;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #d0d32d; /* Cambia "#ff0000" al color que desees */
            color: #000000; /* Cambia "#ffffff" al color de texto que desees */
            border: none;
            /* Otros estilos si los necesitas */
        }
        body {
            height: 100%; /* Ajusta la altura del body al 100% */
        
        }
        .paragraph-with-image img {
            margin-right: 10px; /* Espacio entre la imagen y el texto */
            max-width: 70%; /* La imagen no será más ancha que el párrafo */
            height: auto; /* Mantiene la proporción de la imagen */
            width: 50px;
        }
        .paragraph-with-image {
        display: flex;
        align-items: center;
        height: 100%; /* Ajusta la altura al 100% para centrar verticalmente */
        justify-content: center;
        }
        .contenedor5 {
            display: flex;
            align-items: center; /* Centrar verticalmente */
          }
          
          .imagen {
            width: 13%; /* Tamaño de la imagen */
          }
          
          .titulo {
            flex-grow: 1; /* El título ocupará todo el espacio restante */
            text-align: center; /* Centrar horizontalmente */
            /*font-family: 'Dancing Script', cursive;*/
            font-family: 'Cormorant Garamond', serif;
        }
        p{
            font-family: 'Cormorant Garamond', serif;
        }
                /* Estilo personalizado para el botón */
                .boton-personalizado {
                    background-color: #252713; /* Cambia el color de fondo a tu preferencia */
                    color: #fff; /* Cambia el color del texto a tu preferencia */
                    padding: 10px 10px; /* Añade relleno para dar espacio al contenido */
                    border: none; /* Quita el borde del botón si lo deseas */
                    border-radius: 5px; /* Añade bordes redondeados si lo deseas */
                    cursor: pointer; /* Cambia el cursor al puntero al pasar por encima */
                    height: 40px; /* Ajusta la altura del botón a tu preferencia */
                }
                .resaltado {
                    font-size: 30px; /* Tamaño de fuente deseado para la palabra resaltada */
                    vertical-align: middle;
                    /* Puedes agregar otros estilos CSS aquí, como color, negrita, etc. */
                }
                #formlabel{
                    background-color: #000000;
                }
            </style>
            <script>
                    function toggleNewCard() {
            // Obtener el contenedor de la nueva tarjeta
            var newCardContainer = document.getElementById("newCardContainer");

            // Alternar la visibilidad de la nueva tarjeta
            if (newCardContainer.style.display === "none") {
                newCardContainer.style.display = "block";
            } else {
                newCardContainer.style.display = "none";
            }
        }
        </script>
</head>
<body class="fondos">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Prosegur tecapp</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Administrativo.php">Consultas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <img id="" src="imagenes/logo.png" alt="" width="180" height="60">

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener la referencia a la imagen por su ID
        var imagen = document.getElementById("miImagen");

        // Agregar un evento de click a la imagen
        imagen.addEventListener("click", function() {
            // Redirigir a otra vista cuando se haga clic en la imagen
            window.location.href = "paneles.html";
        });
    });
</script>
<div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-BUEN DIA HABLA CON XXXXXX DE SOPORTE TECNICO EN LINEA DE PROSEGUR, CON ¿QUIEN TENGO EL GUSTO DE HABLAR?<BR> EN QUE LE PUEDO COLABORAR ME PUEDE INDICAR EL NUMERO DE CEDULA O NIT CON EL QUE ESTA REGISTRADO EL SERVICIO POR FAVOR.</b></p>
    </div>  
    <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>INGRESAR LA CEDULA DEL TITULAR EN MASTERMIND Y AHI SE ENCONTRARA EL CONTRATO DE LA PERSONA PARA REGISTRARLO A CONTINUACION:</p></b>
    </div> 
    <div class="container mt-3">
        <button type="button" class="btn btn-primary" onclick="toggleNewCard()">NOTA IMPORTANTE</button><br><br>    </div>
    <div class="container mt-3" id="newCardContainer" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
<p>ESTE ICONO LE VA INDICAR LO QUE TIENE QUE DECIR</p>    </div>  
    <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
<P>ESTE ICONO SERA PARA EL PROCEDIMIENTO QUE DEBE SEGUIR</P>    </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header color2">Ingreso</div>
                    <div class="card-body color1">
                        <form method="POST" action="controlador.php" onsubmit="return validarFormulario()">
                        <div class="mb-3">
                                <label for="username" class="form-label color1">Contrato</label>
                                <input type="text" class="form-control" placeholder="XXXXXXX" id="contrato" name="contrato" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label color1">Nombre de usuario</label>
                                <input type="text" class="form-control" placeholder="COXXXXXX" id="username" name="username" minlength="9" maxlength="10"required>
                                
                            </div>
                            <input type=submit value="Ingresar" onclick="tomarContrato();"></input>                            
                            
                        </form>
                    </div>
       
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="./js/tomarDatos.js"></script>

    <script>
        function validarFormulario() {
            // Obtener el valor del campo de entrada
            const username = document.getElementById("username").value;

            // Verificar si comienza con "co" o "CO"
            if (username.startsWith("co") || username.startsWith("CO")) {
                // El valor es válido, permite que el formulario se envíe
                return true;
            } else {
                // El valor no es válido, muestra una alerta de error
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El nombre de usuario debe comenzar con "co" o "CO".',
                });
                // Detiene el envío del formulario
                return false;
            }
        }
    </script>
</body>
</html>