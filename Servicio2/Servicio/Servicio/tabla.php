<?php
    include 'conecta.php';

    $consulta = "SELECT * FROM usuario";
    $guardar = $conecta->query($consulta);
    
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>tabla fachera   </title>

    </head>
    <body>
        <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive table-hover" id="TablaConsulta">
                    <table class="table">
                        <thead class="text-muted">
                            <th class="text-center">nombre</th>
                            <th class="text-center">Apaterno</th>
                            <th class="text-center">Amaterno</th>
                            <th class="text-center">Boleta</th>

                       </thead>
                       <tbody>
                            <?php while($row = $guardar->fetch_assoc()){?>
                            <tr>
                                <td> <?php echo $row ['Nombre']; ?></td>
                                <td> <?php echo $row ['APaterno']; ?></td>
                                <td> <?php echo $row ['AMaterno']; ?></td>
                                <td> <?php echo $row ['Boleta']; ?></td>
                                
                            </tr>
                            <?php } ?>

                                
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>


</html>