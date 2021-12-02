<?php
$host="sql305.epizy.com";
    $bd="epiz_30497216_sitio";
    $usuario="epiz_30497216";
    $contrasenia="Hyadf6ITWpOL";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    } catch ( Exception $ex) {
        echo $ex ->getMessage();
    }
    ?>