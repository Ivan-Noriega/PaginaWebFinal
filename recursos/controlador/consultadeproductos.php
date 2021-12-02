<?php
    $sentenciaSQL=$conexion->prepare("select * from libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>