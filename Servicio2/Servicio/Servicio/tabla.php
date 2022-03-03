<?php
    include 'conecta.php';

    $consulta = "SELECT * FROM usuario";
    $usuario='root';
    $contra='';
    $host='localhost';
    $base='servicio';


    
    try{
        $conex= new PDO('mysql:host=' .$host.';dbname='.$base, $usuario, $contra);
    }catch(PDOException $e){
        print "error" .$e->getMessage()."<br/>" ;
        die();
    }

    
    
    
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
                            <th class="text-center">id </th>

                            <th class="text-center">nombre </th>
                            
                            <th class="text-center">solicitud </th>
                            
                            <th class="text-center">Estado </th>
                            
                            <th class="text-center">Detalles </th>
                            
                            <th class="text--center">Comentarios </th>

                       </thead>
                       <tbody>
                          
                            <tr>
                            <?php
            $tabla1="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                             CO.Estado, CO.nombreC,
                             DB.nombreB
                             FROM usuario US
                             INNER JOIN constancia CO ON US.id_usuario = CO.id_usuario
                             INNER JOIN donativo DB ON US.id_usuario = DB.id_usuario
                                                            ";
             $tabla2="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                             DB.nombreB   
                             FROM usuario US
                             INNER JOIN donativo DB ON US.id_usuario = DB.id_usuario
                                            ";
             $tabla3="SELECT US.id_usuario, US.Nombre, US.APaterno, US.AMaterno, US.Boleta, US.Programa, 
                             DA.nombreA   
                             FROM usuario US
                             INNER JOIN donativoa DA ON US.id_usuario = DA.id_usuario
                                            ";
             
             
             $conectarTabla1= $conecta->query($tabla1);
             
             $conectarTabla2= $conecta->query($tabla2);
             
             $conectarTabla3= $conecta->query($tabla3);
             

                                while($fila = $conectarTabla2->fetch_assoc()  ){
                                    echo '
                                        <tr>

                                        <td>'.$fila['id_usuario'].'</td>
                                        
                                        <td>'.$fila['Nombre'].' </td>

                                        <td>'.$fila['nombreB'].' </td>
                                        
                                      
                                        </td>
                                 
                                        
                                      
                                        
                                    ';
                               }
                               
                               ?>
                               
                                
                            </tr>
                     

                                
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>


</html>