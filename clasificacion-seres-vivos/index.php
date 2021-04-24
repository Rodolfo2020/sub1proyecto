<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificacion de los seres vivos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <?php
    $navbar = str_replace('<a href="/clasificacion-seres-vivos/">','<a href="/clasificacion-seres-vivos/" class="active">',file_get_contents('..\views\navbar.php'));
    echo $navbar;
    ?>
    <main>
        <h1>Clasificación de los seres vivos</h1>
        <section>
            <article>
                <h2>Dominios</h2>
                La clasificacion mas alta de los seres vivos en la actualidad es por dominios, solo existen 2; el Procariotas al que pertenecen los organismos que no tienen un núcleo definido y el Eucariotas que pertenecen todas las células que tienen un núcleo definido.
            </article>
        </section>
        <section>
            <article>
                <h2>Reinos</h2>
                Dentro de los dominios se encuentran reinos para diferenciar mas a los seres vivos, existen 5 de los cuales el unico que es parte del dominio Procariotas es el reino Monera, los otros 4 pertenecen al dominio Eucariotas y son Protistas, Hongos, Vegetal
                y Animal.
                <div class="padding1w">
                    <h3>Monera</h3>
                    <div class="padding1w">Solo organismos unicelulares como Cianofitas y Bacterias.</div>
                    <div class="subimg">
                        <img src="img/monera/cianofitas.jpg" alt="cianofitas">
                        <img src="img/monera/bacterias.jpg" alt="bacterias">
                    </div>

                    <h3>Protista</h3>
                    <div class="padding1w">Pertenecen organismos como las Algas primitivas, Algas superiores, Ciliados, Sarcodinos, etc.</div>
                    <div class="subimg">
                        <img src="img/protista/algasp.jpg" alt="algas">
                        <img src="img/protista/ciliados.jpg" alt="ciliados">
                    </div>

                    <h3>Hongos</h3>
                    <div class="padding1w">Dentro de este grupo se pueden hallar seres vivos como Basidiomicetes, Mixomicetes, Ficomicetes, Ascomicetes entre otros.</div>
                    <div class="subimg">
                        <img src="img/hongos/mixomicetes.jpg" alt="mixomicetes">
                        <img src="img/hongos/ascomicetes.jpg" alt="ascomicetes">
                    </div>

                    <h3>Vegetal</h3>
                    <div class="padding1w">Se encuentran todo tipo de plantas como Briófibios, Pteridófitos y Espermatófitos.</div>
                    <div class="subimg">
                        <img src="img/vegetal/briofitos.jpg" alt="briofibios">
                        <img src="img/vegetal/espermatofitos.jpg" alt="espermatofitos">
                    </div>

                    <h3>Animal</h3>
                    <div class="padding1w">Una gran diversidad de especies animales, pertenecen Moluscos, Cordados, Peces, Anfibios, Reptiles, Endoproctos, Lofoforados, Antropodos, Nemertinos, Anélidos, entre otra gran varidad.</div>
                    <div class="subimg">
                        <img src="img/animal/anfibio.jpg" alt="anfibio">
                        <img src="img/animal/reptiles.jpg" alt="reptiles">
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>

</html>