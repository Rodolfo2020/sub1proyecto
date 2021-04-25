<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microbiologia y ecologia</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <?php
    $navbar = str_replace('>Microbios y ecologia</a>', ' class="active">Microbios y ecologia</a>', file_get_contents('..\views\navbar.php'));
    echo $navbar;
    ?>
    <main>
        <h1>Microbiologia y ecologia</h1>
        <section>
            <article>
                <h2>Ecología microbiana</h2>
                La ecología es la rama de la biología que estudia las relaciones entre los seres
                vivos y su ambiente; es decir, todas las condiciones físicas y biológicas del
                lugar donde habitan. Así, la ecología microbiana se refiere al estudio de los
                microbios en el ambiente y sus interacciones, y cómo todas estas condiciones influyen directamente sobre la vida de otros organismos.
                <ul class="microbios">
                    <li>Los microbios son modelos de evolución</li>
                    <li>Muchos de los alimentos que consumimos son producidos por
                        microorganismos</li>
                    <li>Los microbios degradan y detoxifican los contaminantes</li>
                    <li>Los microorganismos median muchos procesos
                        biogeoquímicos que afectan el clima</li>
                    <li>Los microbios viven en asociación con otros organismos</li>
                </ul>
                <div class="subimg">
                        <img src="img/micro1.jpg" alt="microbios">
                        <img src="img/micro2.jpg" alt="microbios">
                    </div>
            </article>
        </section>
    </main>
</body>

</html>