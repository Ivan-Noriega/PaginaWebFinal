<?php foreach($listaLibros as $libro){?>
        <div class="col-md-3">  

        <div class="card tabla2">
            <p><?php echo $libro["imagen"]; ?></p>
            <div class="card-body">
                <h4 class="card-title"><?php echo $libro["nombre"]; ?></h4>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
            </div>
        </div>
        </div>        
    <?php } ?>