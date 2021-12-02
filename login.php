<?php
    session_start();    
    if($_POST){

        if(($_POST["usuario"]=="Ivan")/* && ($_POST["contrasenia"]=="123")*/){
            $_SESSION["usuario"]="ok";
            $_SESSION["nombreUsuario"]="Ivan";
            header("Location:administrarProductos.php");
        }else{                        
            $mensaje="Usuario o contraseña incorrectos";            
        }

        
    }   
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login - Administrador</title>
    <link rel="shortcut icon" href="recursos/" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="shortcut icon" href="recursos/imagenes/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="recursos/css/minstyles.css">
  </head>
  <body>    

    
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br><br><br><br><br><br><br>
            <?php
              if(isset($mensaje)){
            ?>
            <div class="alert alert-danger" role="alert">
            <?php
              echo $mensaje;
            ?>
            </div>            
            <?php
              }
            ?>
            <div class="card">
                <div class="card-header">
                    Login - Administrador
                </div>
                <div class="card-body">
                    <form method="POST">
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Introduce tu nombre de usuario">                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" placeholder="Introduce tu contraseña">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartas ninguno de estos datos.</small>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                    
                    
                </div>
                
            </div>

        </div>
        
    </div>
</div>

  </body>
</html>