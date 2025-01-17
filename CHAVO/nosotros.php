<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Consultorio Dental</title>
    <style>
        /* Estilo global */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #85e1d1, #6fc3f7); /* Fondo suave de gradiente */
            color: #333;
        }

        header {
    display: flex;
    justify-content: space-between;
    align-items: center; /* Alineación vertical */
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.8);
}

nav ul {
    list-style: none;
    display: flex; /* Coloca los elementos en fila */
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px; /* Espaciado entre botones */
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 1em;
    font-weight: bold;
    display: inline-block;
    background-color: #0062ff; /* Botón azul */
    padding: 10px 20px;
    border-radius: 20px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    text-align: center;
}

nav ul li a:hover {
    background-color: #0052cc; /* Efecto hover */
}



        /* Título principal */
        h1 {
            color: #ffffff;
            text-align: center;
            padding: 50px 0;
            font-size: 3em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Contenedor de las secciones */
        .section {
            background-color: #ffffff;
            margin: 30px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            transform: translateY(-20px);
            transition: all 0.3s ease;
        }

        .section:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* Subtítulos */
        h2 {
            color: #0062ff;
            font-size: 2em;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Párrafos */
        p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* Placeholder dentro de las secciones */
        .placeholder {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            font-style: italic;
            text-align: center;
            color: #777;
            font-size: 1.1em;
        }

        /* Botón de regreso */
        .button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #0062ff;
            color: white;
            font-size: 1.2em;
            text-transform: uppercase;
            border-radius: 25px;
            text-decoration: none;
            margin: 30px auto;
            display: block;
            text-align: start;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #0052cc;
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>

<header>
    <h1>Consultorio Dental</h1>
    <?php include 'config.php'; ?>
<nav>
    <ul>
        <li><a href="<?php echo BASE_URL; ?>login.php" class="button">Iniciar sesion</a></li>
        <li><a href="<?php echo BASE_URL; ?>inicio.php" class="button">Inicio</a></li>
        <li><a href="<?php echo BASE_URL; ?>reserva.php" class="button">Reservación</a></li>
        <li><a href="<?php echo BASE_URL; ?>contacto.php" class="button">Contacto</a></li>
    </ul>
</nav>

</header>
</head>

<body>

    <h1>Nosotros</h1>

    <!-- Origen -->
    <div class="section">
        <h2>Origen</h2>
        <p class="placeholder">Somos una clínica especializada en cuidar tu sonrisa.</p>
    </div>

    <!-- Misión -->
    <div class="section">
        <h2>Misión</h2>
        <p class="placeholder">Es cuidar la salud oral y el bienestar de nuestros usuarios y sus familias.</p>
    </div>

    <!-- Visión -->
    <div class="section">
        <h2>Visión</h2>
        <p class="placeholder">Ser líderes dentro del ramo dental basados en la calidad de nuestra gente y servicios, formando así parte integral de los pacientes y dentistas en general.</p>
    </div>

    <!-- Valores -->
    <div class="section">
        <h2>Valores</h2>
        <p class="placeholder">Solidaridad, compasión, respeto, reciprocidad y justicia.</p>
    </div>

    <!-- Botón de regreso -->
    <a href="inicio.php" class="button">Regresar a la Página Principal</a>

</body>
</html>