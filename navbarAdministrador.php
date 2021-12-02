<?php
  
  if(isset($_SESSION["usuario"])){
    header("Location:login.php");
  }else{
  /*  if($_SESSION["nombreUsuario"]=="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
    }*/
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Biblioteca de Babel</title>
    <!--SelfImport-->
        
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="shortcut icon" href="recursos/imagenes/icon.ico" type="image/x-icon">        
    <link rel="stylesheet" href="recursos/css/minstyles.css">
    <!--EndSelfImport-->
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <ul class="nav navbar-nav">
           <li class="nav-item">
               <a class="nav-link" href="#">Modulo de Administrador</a>
           </li>

           

           <li class="nav-item">
               <a class="nav-link" href="administrarProductos.php">Administrar Productos</a>
           </li>

           <li class="nav-item">
               <a class="nav-link" href="recursos/controlador/cerrarsesion.php">Cerrar sesion</a>
           </li>

           <li class="nav-item">
               <a class="nav-link" href="index.php">Ver sitio web</a>
           </li>
       </ul>
   </nav>
<div class="container">
    <br>    
    <div class="row">
        

        