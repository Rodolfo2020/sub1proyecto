    <nav id="mainNavbar" class="navmain">
        <a href="./">Inicio</a>
        <a href="sustentabilidad.php">Sustentabilidad</a>
        <a href="ecosistema.php">Ecosistemas</a>
        <a href="factores-ambientales.php">Factores ambientales</a>
        <a href="clasificacion-seres-vivos.php">Clasificiacion de los seres vivos</a>
        <a href="microbiologia-ecologia.php">Microbios y ecologia</a>
        <a href="impacto-ambiental.php">Impacto ambiental</a>
        <a href="perdida-alteracion-ecosistemas.php">Perdida y alteracion de los ecosistemas</a>
        <a href="energias-renovables.php">Energias renovables</a>
    </nav>
    <script>
        function responsive() {
            var x = document.getElementById("mainNavbar");
            if (x.className === "navmain") {
                x.className += " responsive";
            } else {
                x.className = "navmain";
            }
        }
    </script>