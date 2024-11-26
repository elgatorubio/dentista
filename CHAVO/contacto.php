<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #e0f7fa; /* Fondo uniforme */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura completa de la ventana */
            color: #333;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        h1 {
            margin: 0;
            font-size: 1.5em;
            color: #333;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            background-color: #0062ff;
            padding: 10px 20px;
            border-radius: 20px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #0052cc;
        }

        .contact-container {
            background-color: #ffffff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 600px;
        }

        .contact-info p {
            margin: 0.5em 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Consultorio Dental</h1>
        <?php include 'config.php'; ?>
<nav>
    <ul>
        <li><a href="<?php echo BASE_URL; ?>login.php" class="button">Iniciar sesion</a></li>
        <li><a href="<?php echo BASE_URL; ?>inicio.php" class="button">Inicio</a></li>
        <li><a href="<?php echo BASE_URL; ?>reserva.php" class="button">Reservación</a></li>
        <li><a href="<?php echo BASE_URL; ?>nosotros.php" class="button">nosotros</a></li>
    </ul>
</nav>
    </header>

    <div class="contact-container">
        <h1>Contacto</h1>
        <p>No dudes en mandarnos un mensaje para pedir información o dudas</p>

        <div class="contact-info">
            <p><b>Correo Electronico:</b><br>
            <a href="mailto:efrain.reynaavila@cesunbc.edu.mx">clinicadentaltj@gmail.com</a></p>

            <p><b>Numero Telefonico</b><br>
            664 733 5196</p>

            <p><b>Direccion:</b><br>
                Blvd. Cucapah 20100-Sur, El Lago, 22210 Tijuana, B.C.</p>
        </div>

        
    </div>

</body>
</html>