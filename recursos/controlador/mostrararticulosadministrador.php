<?php foreach ($listaLibros as $libro) { ?>
            <tr>                
                <td><?php echo $libro["id"] ?></td>
                <td><?php echo $libro["nombre"] ?></td>
                <td>
                   <?php echo $libro["imagen"] ?>
                </td>
                <td>                    

                    <form method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro["id"]; ?>">
                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary">
                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger">
                    </form>

                </td>
            </tr>     
            <?php } ?>