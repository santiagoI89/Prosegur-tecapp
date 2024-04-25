
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosegur tecapp</title>
    <link rel="stylesheet" href="css/css.css?v1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .password-input {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="fondos">

<script>
    function validarInicioSesion() {
        // Obtener los valores del usuario y contraseña
        const usuario = document.getElementById("usuarioAdmin").value;
        const contraseña = document.getElementById("contraseñaAdmin").value;

        // Realiza la validación (puedes modificar esta lógica)
        
            // Usuario válido, verifica la contraseña
            if (usuario === "admin" || contraseña === "admin" ) { // Reemplaza "tu_contraseña" con la contraseña válida
                // Contraseña válida, permite que el formulario se envíe
                return true;
            } else {
                // Contraseña inválida, muestra una alerta de error
                Swal.fire({
                    icon: 'error',
                    title: 'Error en la contraseña',
                    text: 'La contraseña es incorrecta. Por favor, verifica tus credenciales e intenta de nuevo.',
                });
                // Detiene el envío del formulario
                return false;
            }
        } 
        

    // Intercepta el envío del formulario y llama a la función validarInicioSesion
</script>

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


<img src="imagenes/logo.png" alt="" width="180" height="60">

    


    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header color1">Ingreso</div>
                    <div class="card-body color1">
                        <form method="POST" action="login.php">
                        <div class="mb-3">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" placeholder="XXXXXXX" id="usuarioAdmin" name="usuarioAdmin" required>
                                
                            </div>
                            <label for="username" class="form-label">Contraseña</label>
                            <div class="mb-3 password-input" >
                                
                                <input type="password" class="form-control" placeholder="" id="contraseñaAdmin" name="contraseñaAdmin" required>
                                <span class="toggle-password" onclick="togglePassword()">Mostrar</span>
                                
                            </div>
                            <input type=submit value="Ingresar"></input>
                            
                            
                        </form>
                        <script>
        function togglePassword() {
            var passwordInput = document.getElementById("contraseñaAdmin");
            var toggleButton = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.textContent = "Ocultar";
            } else {
                passwordInput.type = "password";
                toggleButton.textContent = "Mostrar";
            }
        }
    </script>
                    </div>
       
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
    

</body>
</html>