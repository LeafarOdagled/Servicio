<?php
    //Variables que se ocuoan para el formato  
    $width_cell=array(30,30,30,30);
    //Varables de las celdas
    $fechaDia=1;
    $fechaMes=3;
    $fechaAnio=2000;
    $responsableNombre='Héctor Alejandro Auña Cid';
    //Variebles Numero de constancia
    $AnioCons="2021";
    $numeroConstancia=100;
    //Poner el numero de constancia, ejemplo: 001,010,100.
    if($numeroConstancia>=0 && $numeroConstancia<=9){
        $numeroConstancia="00".$numeroConstancia;
    }elseif($numeroConstancia>=10 && $numeroConstancia<=99){
        $numeroConstancia="0".$numeroConstancia;
    }else{
        $numeroConstancia=$numeroConstancia;
    }
    //Variables que se van a ocupar para los datos del alumno
    $nombreAlumno=strtoupper("Adamary Itzel Dayna Montiel Nuñez");//aqui va la variable del nombre en la tabal usuario
    $nombreAlumnoMayuscula=remplazoMayuscula($nombreAlumno);
    $boletaAlumno='2019670151';//aqui va la variable del boleta en la tabal usuario
    $carrera='Ingenieria en Sistemas Computacionales';    //aqui va la variable del carrera en la tabal usuario 
    $Sexo='Hombre';//aqui va la variable del sexo en la tabal usuario 
    if($Sexo=='Hombre'){ 
        $Sexo='egresado';
    }else{
        $Sexo='egresada';
    }

    require('/xampp/htdocs/servicio/Servicio2/Servicio/Librerias/html_table.php');
    $pdf =new PDF("p","mm","letter");
    $pdf->AddPage();
    //Cabecera  
    $pdf->SetFont("Arial","B",12); 
    $pdf->Image('Imagenes/Logo_Instituto_Politécnico_Nacional.png','180','5','40','27','PNG'); 
    $pdf->Image('Imagenes/SEP_Logo.png','10','4','60','20','PNG');  
    $pdf->Image('Imagenes/Escudo_mexicano.png','29','60','160','160','PNG');
    $pdf->Cell(100,5,utf8_decode(""),0,0,"c"); 
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(105);   
    $pdf->Cell(100,5,utf8_decode("Instituto Politécnico Nacional Unidad"),0,0,"c"); 
    $pdf->Ln();
    $pdf->SetFont("Arial","B",10);
    $pdf->Cell(63);  
    $pdf->Cell(100,5,utf8_decode("Unidad Profesional Interdisciplinaria de Ingeniería Campus Zacatecas"),0,0,"c");  
    $pdf->Ln();
    $pdf->Ln(); 
    //Celdas de los datos 
    $pdf->Cell(120);
    $pdf->SetFont("Arial","",5.5); 
    $pdf->Cell($width_cell[3],5,utf8_decode("Fecha de clasificación:"),1,0,"c");   
    $pdf->Cell($width_cell[3],5,utf8_decode(fechaCeldas($fechaDia,$fechaMes,$fechaAnio)),1,0,'R');  
    $pdf->Ln();
    $pdf->Cell(120);
    $pdf->Cell($width_cell[3],5,utf8_decode("Unidad responsable:"),1,0,"c");   
    $pdf->Cell($width_cell[3],5,utf8_decode("UPIIZ"),1,0,'R');  
    $pdf->Ln();
    $pdf->Cell(120);
    $pdf->Cell($width_cell[3],5,utf8_decode("Carácter:"),1,0,"c");  
    $pdf->Cell($width_cell[3],5,utf8_decode("Confidencial"),1,0,'R');   
    $pdf->Ln();
    $pdf->Cell(120);
    $pdf->Cell($width_cell[3],5,utf8_decode("Partes clasificadas:"),1,0,"c");  
    $pdf->Cell($width_cell[3],5,utf8_decode("Boleta"),1,0,'R');  
    $pdf->Ln();
    $pdf->Cell(120);
    $pdf->Cell($width_cell[3],12,utf8_decode("Fundamento legal:"),1,0,"c");  
    $pdf->Multicell($width_cell[3],4,utf8_decode("Articulo 3, fracción II, 18, fracción II y 21, LFTAIPG, Lineamiento 32°, fracción XVII"),1,'R');     
    $pdf->Cell(120);
    $pdf->Cell($width_cell[3],6,utf8_decode("Rúbica del responsabla"),1,0,"c");  
    $pdf->MultiCell($width_cell[3],3,utf8_decode("MHPE-TE. ".$responsableNombre),1,'R');  
    //Numero de constancia:
    $pdf->SetFont("Arial","",10);
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Cell(120); 
    $pdf->Cell(60,5,utf8_decode("CONSTANCIA No. ".$numeroConstancia." - ".$AnioCons),0,0,'R');    
    //Texto predeterminado con los nombres: 
    $pdf->SetFont("Arial","B",12);
    $pdf->Ln();
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Multicell(0,2,"A QUIEN CORRESPONDA:","C");  
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Ln(); 
    $pdf->Ln();  
    $pdf->Ln();  
    $pdf->SetFont("Arial","",12);  
    $html='<tr height:10>El que suscribe, hace constar que el '.'<b>'.$nombreAlumnoMayuscula.'</b>'.', con número de boleta '.$boletaAlumno.' egresada del Programa Académico de '.$carrera 
    .' NO ADEUDA MATERIAL DOCUMENTAL en la biblioteca de esta Unidad Académica.</tr>';
  /*  $html='<table border="1">
    <tr>
    <td width="750" height="120">El que suscribe, hace constar que el '.$nombreAlumnoMayuscula.', con número de boleta '.$boletaAlumno.' egresada del Programa Académico de '.$carrera 
    .' NO ADEUDA MATERIAL DOCUMENTAL en la biblioteca de esta Unidad Académica.</td>
    </tr>
    </table>';*/
    $pdf->WriteHTML(utf8_decode($html));
    $pdf->Ln(10); 
    //Fechas escrita
    $pdf->Multicell(180,5,utf8_decode("A petición del interesado y para los fines que estime convenientes, se extiende la presente en la Ciudad de Zacatecas, Zac.,".fechaTXT(1,1,1)),"C"); 
    //Firmas y sello
    $pdf->Image('Imagenes/Firma.PNG','70','155','70','45','PNG');  
    $pdf->Image('Imagenes/Sello.png','110','175','70','50','PNG');  
    $pdf->Ln(35);
    $pdf->Cell(196,5,"ATENTAMENTE",0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(196,5,chr(34)."La Tecnica al Servicio de la Patria".chr(34),0,0,'C');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Cell(196,5,"___________________________________",0,0,'C');
    $pdf->Ln();
    $pdf->Cell(196,5,utf8_decode("M.H.P.E.-T.E. ".$responsableNombre),0,0,'C');  
    $pdf->Ln(5);
    $pdf->Cell(196,5,utf8_decode("Jefe del Departamento de Servicios Estudiantiles"),0,0,'C');  
    $pdf->Ln(30);
    $pdf->SetFont("Arial","B",8);
    $pdf->Cell(25); 
    $pdf->Cell(10,5,utf8_decode("c.c.p. Consecutivo "),0,0,'C');   
    $pdf->Ln(5);
    $pdf->SetFillColor(95, 8, 8);
    $pdf->Cell(196,3,"",1,0,'C',true);
    $pdf->SetFont("Arial","B",10);
    $pdf->Ln(5);
    $pdf->Cell(196,5,utf8_decode("Boulevard El Vote S/N, Cerro del Gato, Ejido La Escondida, Col. Cd. Administratica, Zacatecas,Zac., C.P. 98160"),0,0,'C'); 
    $pdf->Ln(5);
    $pdf->Cell(196,5,utf8_decode("Tel:55-57296000 ext. 83516, correo electrónico: oramos@ipn."),0,0,'C'); 
    $pdf->Output();
    $pdf->Output();
?>
<?php
//Funciones extras que vamos aterminar ocupando para poner el dia, mes y el anio por escrito, funcion para poder cambiar caracteres especiales
function fechaTXT($dia,$mes,$anio){ 
     $arrayDia = array('null','uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez','once','doce','trece','catorce','quince','dieciséis','diecisiete','dieciocho','diecinueve',
     'veinte','veintiuno','veintidós','veintitrés','veinticuatro','venticinco','veintiséis','veintisiete','ventiocho','veintinueve','treinta','treinta y uno'); 
     $arrayMes = array('null','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
     $arrayAno = array('null','dos mil veintiuno','dos mil veintidós','dos mil veintitrés','dos mil veinticuatro','dos mil veinticinco','dos mil veintiseis','dos mil veintisiete',
     'dos mil veintiocho','dos mil veintinueve','dos mil treinta','dos mil treinta y uno','dos mil treinta y dos','dos mil treinta y tres','dos mil treinta y cuatro','dos mil treinta y cinco',
     'dos mil treinta y seis','dos mil treinta y siete','dos mil treinta y ocho','dos mil treinta y nueve','dos mil cuarenta','dos mil cuarenta y uno','dos mil cuarenta y dos',
     'dos mil cuarenta y tres','dos mil cuarenta y cuatro','dos mil cuarenta y cinco','dos mil cuarenta y seis','dos mil cuarenta y siete','dos mil cuarenta y ocho','dos mil cuarenta y nueve',
     'dos mil cincuenta'); 
    if($dia== 1){
        return utf8_decode(" al dia ".$arrayDia[$dia]." del mes de ".$arrayMes[$mes]." del ".$arrayAno[$anio].".");   
    }else{
        return utf8_decode(" a los ".$arrayDia[$dia]." del mes de ".$arrayMes[$mes]." del ".$arrayAno[$anio].".");   
    }   
}
//Ojala se pudiera ahcer sobrecarga de funciones
function fechaCeldas($dia,$mes,$anio){  
    $arrayMes = array('null','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');  
    return utf8_decode($dia." de ".$arrayMes[$mes]." del ".$anio);     
}
//Para acambia a mayusculas
function remplazoMayuscula($nombre){
    $nombre=str_replace("ñ","Ñ",$nombre);
    $nombre=str_replace("á","Á",$nombre);
    $nombre=str_replace("é","É",$nombre);
    $nombre=str_replace("í","Í",$nombre);
    $nombre=str_replace("ó","Ó",$nombre);
    $nombre=str_replace("ú","Ú",$nombre);
    $nombre=str_replace("ü","Ü",$nombre); 
    return $nombre;
}
?>