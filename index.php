<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="Menu">
            <h1>ADSO</h1>
            <a class="Menu-Botones" href="">Contacto</a>
            <a class="Menu-Botones" href="">Contactenos</a>
        </div>
    </header>

    <section>
        <div class="Main">
            <?php
                include('views/main.php')
            ?>
        </div>
    </section>

    <footer>
        <div class="Pie">
            <span>SENA CDA - Chía &copy 2023</span>
            <span>Todos los derechos reservados</span>
        </div>
    </footer>

</body>
</html>