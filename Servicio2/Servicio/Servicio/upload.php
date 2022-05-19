<?php
    //var_dump($_FILES["file"]);
    
    $directorio = "uploads/";

    $archivo = $directorio . basename($_FILES["archivo1"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    $ruta = strtolower(pathinfo($archivo, PATHINFO_DIRNAME));
    echo $ruta;

    // valida que es imagen
    $checarSiImagen = getimagesize($_FILES["archivo1"]["tmp_name"]);

    //var_dump($size);

        //validando tamaño del archivo
        $size = $_FILES["archivo1"]["size"];

        if($size > 500000){
            echo "El archivo tiene que ser menor a 500kb";
        }else{

            
            
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["archivo1"]["tmp_name"], $archivo)){
                    echo "El archivo se subió correctamente";


                }else{
                    echo "Hubo un error en la subida del archivo";
                }
            
        }
    
?>