<main class="container mt-5 overflow-hidden">
   <?php 
        if (!empty($oradores)) { ?>
       <h3 class="text-center mt-5">ORADORES QUE HABLARAN DEL TEMA QUE BUSCASTE</h3>
       <section class="mt-5 overflow-auto">
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Tema</th>
                        </tr>
                    </thead>
                    <?php 
                    }  ?>            
                    <tbody>
                    <?php 
                     if (!empty($oradores)) {
                        foreach($oradores as $orador){ 
                    ?>
                        <tr>
                            <th scope="row"><?php echo $orador['id_orador'];?></th>
                            <td> <img class="img-fluid img-thumbnail" style="object-fit:cover;" width="150" height="150" src="<?php echo BASE_URL; ?>assets/upload/<?php echo $orador['imagen'];?>" alt="<?php echo $orador['nombre'];?>">  </td>
                            <td><?php echo $orador['nombre'];?></td>
                            <td><?php echo $orador['apellido'];?></td>
                            <td><?php echo $orador['mail'];?></td>
                            <td><?php echo $orador['tema'];?></td>
                        </tr>
                    <?php 
                        } 
                      }
                      else{
                        echo "<h2 class='mt-5 text-center'>No hay oradores cargados con el tema buscado</h2>";
                      }
                    ?>
                    </tbody>
            </table>
            <?php
             $paginaAnterior = $_SERVER['HTTP_REFERER'] ?? '../pages/listado.php';
             echo "<div class='d-flex justify-content-center'> 
             <a class='text-center align-item-center' href='" . htmlspecialchars($paginaAnterior) . "'>Volver Atrás</a> 
             </div>";?>
       </section>

    </main>