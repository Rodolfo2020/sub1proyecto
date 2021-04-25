<!DOCTYPE html>
<html>

<head>
    <title>Ecosistema</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../../css/navbar.css">
</head>

<body>
    <aside>
        <section>
        <?php
    $navbar = str_replace('>Ecosistemas</a>',' class="active">Ecosistemas</a>',file_get_contents('..\views\navbar.php'));
    echo $navbar;
    ?>
        </section>
    </aside>
    <center class="testbox">
        <h1 style="color:blue;"><b>Ecosistemas</b></h1>
        Un ecosistema es el conjunto de especias que habitan en un área determinada y que interactúa entre ellas y que interactúan tambien con el ambiente del lugar en el que viven. Por tanto, podemos llamar ecosistema a un lugar muy grande como la selva, a un
        lugar no tan grande como puede ser un lago o incluso a un lugar muy pequeño como puede ser un lago.<br>
    </center>
    <center>
        <img src="Ecosistema.jpg" tittle="Ecosistema" width="400" height="200" ;>
    </center>
    <center class="testbox">
        <h1 style="color:blue;">Biotopo y Biocenosis</h1>
        El Biotopo es la parte sin vide e inerte del ecosistema; formada por las rocas, el agua, la tierra, asi como por otros factores abióticos(sin vida) como puede ser la luz, la temperatura o la presencia de agua.<br> La Biocenosis o comunidad biológica
        la forman todos los seres vivos que habitan en el biotopo, es decir, los factores bioticos (que tienen vida) del ecosistema. la comunidad biológica o biocenosis esta formada por organismos de diferentes especies.
    </center>
    <center>
        <img src="bioybio.jpg" title="BiocenosisyBiotopo width300" height="200" ;>
    </center>
    <center class="testbox">
        <b>IMPORTANTE: un ecosistema no sólo es la biocenosis y el biotopo, tenemos que añadirle la interacción que hacen estas especies con su medio: el biotopo.</b><br> Por ejemplo: cuando un zorro esta bebiendo agua existe una interacción entre algo
        vivo(Biocenosis) con algo que no tiene vida(el biotopo), otro ejemplo es cuando una nutria se esta refugiando en una roca con forma de madriguera hay una interacción entre la biocenosis(la nutria) con el biotopo(la roca.)
    </center>
    <center> <img src="nutria.jpg" title="Nutria y una roca" width="300" height="200" ;></center>
    <center class="cuadro1">
        LAS DIFERENTES INTERACCIONES ENTRE LOS DISTINTOS ELEMENTOS VIVOS DE UN ECOSISTEMA PUEDEN SER ENTRE ORGANISMOS DE LA MISMA ESPECIE LLAMADAS "relaciones interespecificas" y "relaciones intraespecificas".<br>
        <b>Relacion intraespecifica: Ecosistema formado por la misma especie de organismo</b> Algunas relaciones intra especificas son:
        <ul>
            <li><b>Competencia intraespecifica</b></li>Cuando una poblacion crece los recursos se vuelven limitados, por lo que los individuos compiten por obtener ese recurso.<br>
            <li><b>Asociaciones</b></li>En ellas los individuos se unen para obtener beneficios entre ellos.<br>
            <center><img src="manada.jpg" title="manada" width="300" height="200" ;></center>
        </ul>
    </center>
    <center class="cuadro1">
        <b>Relaciones interespecificas: Ecosistema formado por distinta especie de organismo</b> Las relaciones interespecificas son las siguientes:<br>
        <ul>
            <li><b>Competencia interespecifico</b></li>Ocurre cuando dos especies compiten por un mismo recurso.<br>
            <li><b>Depredacion</b></li>En esta relacion una especie sale beneficiada mientras otra especie esperjudicada, evidentemente la especie depredada es la perjudicada en tanto que la beneficiada es la depredadora.<br>
            <li><b>Mutualismo</b></li>Las dos especies resultan beneficiadas de su union.<br>
            <li><b>Comensalismo</b></li>Una especie resulta beneficiada y la otra no se beneficia ni se perjudica dela relacion.<br>
        </ul>
        <img src="depredacion.jpg" title="depredacion" width="300" height="200">
    </center>
</body>

</html>