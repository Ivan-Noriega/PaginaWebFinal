<?php
include("DataBase.php");
//condicional ternaria
    $txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
    $txtNombre=(isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $txtImagen=(isset($_FILES["txtImagen"]["name"]))?$_FILES["txtImagen"]["name"]:"";
    $accion=(isset($_POST["accion"]))?$_POST["accion"]:"";
        switch($accion){
        case"Agregar":

            $sentenciaSQL=$conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre, :imagen);");
            $sentenciaSQL->bindParam(":nombre",$txtNombre);
            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
            if($tmpImagen!=""){
                move_uploaded_file($tmpImagen,"../imagenes".$nombreArchivo);
            }
            $sentenciaSQL->bindParam(":imagen",$nombreArchivo);
            $sentenciaSQL->execute();
            header("Location:../../administrarProductos.php");
            break;
        case"Modificar":
            $sentenciaSQL=$conexion->prepare("update libros set nombre=:nombre where id=:id");
            $sentenciaSQL->bindParam(":nombre",$txtNombre);
            $sentenciaSQL->bindParam(":id",$txtID);
            $sentenciaSQL->execute();

            if($txtImagen!=""){
                $fecha= new DateTime();
                $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
                $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
                move_uploaded_file($tmpImagen,"../imagenes".$nombreArchivo);
                $sentenciaSQL=$conexion->prepare("select imagen from libros where id=:id");
                $sentenciaSQL->bindParam(":id",$txtID);
                $sentenciaSQL->execute();
                $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    
                if(isset($libro["imagen"]) && ($libro["imagen"]!="imagen.jpg")){
                    if(file_exists("imagenes".$libro["imagen"])){
                        unlink("imagenes".$libro["imagen"]);
                    }
                }

            $sentenciaSQL=$conexion->prepare("update libros set imagen=:imagen where id=:id");
            $sentenciaSQL->bindParam(":imagen",$nombreArchivo);
            $sentenciaSQL->bindParam(":id",$txtID);
            $sentenciaSQL->execute();
            }
            header("Location:../../administrarProductos.php");
            break;
        case"Cancelar":
            header("Location:../../administrarProductos.php");
             break;       
        case"Seleccionar":
            $sentenciaSQL=$conexion->prepare("select * from libros where id=:id");
            $sentenciaSQL->bindParam(":id",$txtID);
            $sentenciaSQL->execute();
            $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            $txtNombre=$libro["nombre"];
            $txtImagen=$libro["imagen"];
             break;                
        case"Borrar":
            $sentenciaSQL=$conexion->prepare("select imagen from libros where id=:id");
            $sentenciaSQL->bindParam(":id",$txtID);
            $sentenciaSQL->execute();
            $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if(isset($libro["imagen"]) && ($libro["imagen"]!="imagen.jpg")){
                if(file_exists("imagenes".$libro["imagen"])){
                    unlink("imagenes".$libro["imagen"]);
                }
            }

            
            $sentenciaSQL=$conexion->prepare("delete from libros where id=:id");
            $sentenciaSQL->bindParam(":id",$txtID);
            $sentenciaSQL->execute();         
            
             break;  
    }
    $sentenciaSQL=$conexion->prepare("select * from libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
   
?>