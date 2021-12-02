<?php     
    include("navbarAdministrador.php");    
    include("recursos/controlador/crudLibros.php");

?>

<div class="col-lg-8 tabla">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del libro</th>
                <th>Portada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                   <?php include("recursos/controlador/mostrararticulosadministrador.php") ?>
        </tbody>
    </table>
</div>

<div class="col-md-4">

    <div class="card">
        <div class="card-header">
            Datos del libro
        </div>
        <div class="card-body">
           
        <form action="recursos/controlador/crudLibros.php" method="POST" enctype="multipart/form-data">
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <br>
    <input type="text" required readonly class="form-control" value="<?php echo $txtID ?>" id="txtID" name="txtID" placeholder="Ingrese ID">    
    </div>

    <div class = "form-group">
    <br>
    <label for="txtNombre">Nombre:</label>
    <br>
    <input type="text" required class="form-control" value="<?php echo $txtNombre ?>" id="txtNombre" name="txtNombre" placeholder="Ingrese nombre del libro">    
    </div>

    <div class = "form-group">
    <br>
    <label for="txtImagen">Elegir portada:</label>
    <br>
    <?php echo $txtImagen ?>
    <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Ingrese nombre del libro">    
    </div>
    <br>
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Agregar" class="btn btn-success">Insertar</button>
        <button type="submit" name="accion" value="Modificar"class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" value="Cancelar"class="btn btn-info">Cancelar</button>
    </div>
    </form>
        </div>
        
    </div>

    
    
</div>

<?php 
    include("footerAdministrador.php");
?>