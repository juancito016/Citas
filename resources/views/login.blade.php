<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/carousel-1.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            text-align: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #87CEEB;
        }
        body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo negro transparente */
        z-index: 1; /* Coloca este pseudo-elemento por encima de la imagen de fondo */
        pointer-events: none; /* Permite que los eventos de puntero pasen a través del pseudo-elemento */
        }

        form {
            position: relative;
            z-index: 1; /* Asegura que el formulario esté por encima del fondo negro transparente */
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro transparente */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #87CEEB;
            font-size:25px;
            
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0D85E4;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size:18px;
            
        }
        input[type="submit"]:hover {
        background-color: #555;;
        }

        input[type="submit"] {
        background-color: #0D85E4;
        color: white;
        cursor: pointer;
        }

    </style>
</head>
<body>
    <form>
        <h2>Iniciar Sesión</h2>
        @csrf
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <input type="submit" value="Iniciar Sesion">
    </form>
</body>
</html>
