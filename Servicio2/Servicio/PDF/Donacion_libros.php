<?php 
//Variables celdas
$fechaDia=1;
$fechaMes=3;
$fechaAnio=2021;
$celdaFecha=fechaCeldas($fechaDia,$fechaMes,$fechaAnio); 
$celdaResponsable="Héctor Alejandro Acuña Cid";
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
 $nombreAlumno=strtoupper("Adamary Itzel Dayna Montiel Nuñez");  
 $nombreAlumnoMayuscula=remplazoMayuscula($nombreAlumno);
 $boletaAlumno='2019670151';
 $carrera='Ingenieria en Sistemas Computacionales';     
 $Sexo='Hombre';
 if($Sexo=='Hombre'){ 
     $Sexo='egresado';
 }else{
     $Sexo='egresada';
 }
 $tipoTrbajo="Null";
//Variables para las celdas
$celdaTitulo="HOLA YO SOY EL TEXTO MAYOR NUMEOR ";
$celdaAutor="HOLA YO SOY EL TEXTO MAYOR NUMEOR ";
$celdaISBN="HOLA YO SOY EL TEXTO MAYOR NUMEOR ";
$celdaImprenta="HOLA YO SOY EL TEXTO MAYOR NUMEOR ";
//Estructura del PDF   
require"/xampp/htdocs/Servicio_Social/Librerias/html_table.php"; 
$pdf =new PDF("p","mm","letter");
$pdf->AddPage();
//Cabecera
$pdf->SetFont("Arial","B",12); 
$pdf->Multicell(100,0,utf8_decode(""),0,'R');   
$pdf->Ln();
$pdf->Cell(94);
$pdf->Multicell(100,5,utf8_decode("Unidad Profesional Interdisciplinaria de\nIngeniería, Campus Zacatecas"),0,'R');   
$pdf->SetFont("Arial","B",10); 
//$pdf->Ln();
$pdf->Cell(94);
$pdf->Multicell(100,5,utf8_decode("Subdirección de Servicios Educativos e\nIntegración Social\nDepartamento de Servicios Estudiantiles\nBibliotecas"),0,'R'); 
//Celdas de los dato
$pdf->SetFont("Arial","",5.5);
$pdf->Ln(5);
$pdf->Cell(130);
$pdf->Cell(30,3,utf8_decode("Fecha de clasificación:   "),1,0,'R'); 
$pdf->MultiCell(33,3,utf8_decode($celdaFecha),1,'R'); 
$pdf->Cell(130);
$pdf->Cell(30,3,utf8_decode("Unidad responsable:   "),1,0,'R');
$pdf->MultiCell(33,3,utf8_decode("UPIIZ"),1,'R');
$pdf->Cell(130);
$pdf->Cell(30,3,utf8_decode("Carácter:   "),1,0,'R');
$pdf->MultiCell(33,3,utf8_decode("Confidencial"),1,'R');
$pdf->Cell(130);
$pdf->Cell(30,3,utf8_decode("Partes clasificadas:   "),1,0,'R');
$pdf->MultiCell(33,3,utf8_decode("Boleta"),1,'R');
$pdf->Cell(130);
$pdf->Cell(30,9,utf8_decode("Fundamento legal:   "),1,0,'R');
$pdf->MultiCell(33,3,utf8_decode("Articulo 3, fracción II, 18, fracción II y 21, LFTAIPG, Lineamiento 32°,fracción XVII"),1,'R');  
$pdf->Cell(130);
$pdf->Cell(30,6,utf8_decode("Rúbrica del responsable:   "),1,0,'R');
$pdf->MultiCell(33,3,utf8_decode("MHPE-TE. ".$celdaResponsable),1,'R'); 
$pdf->SetFont("Arial","",10);
$pdf->Ln(); 
$pdf->Cell(134); 
$pdf->Cell(60,5,utf8_decode("CONSTANCIA No. ".$numeroConstancia." - ".$AnioCons),0,0,'R'); 
//Cuerpo
$pdf->SetFont("Arial","B",12);
$pdf->Ln(); 
$pdf->Ln(); 
$pdf->MultiCell(60,5,utf8_decode("A QUIEN CORRESPONDA:"),0,'L'); 
$pdf->Ln();  
$pdf->SetFont("Arial","",10);  
$html='<tr height:10>El que suscribe, hace constar que el '.'<b> C. '.$nombreAlumnoMayuscula.'</b>'.', con número de boleta <b>'.$boletaAlumno.'</b> estudiante del Programa Académico de '.'<b>'.$carrera.'</b>' 
.', realizó la donación del material bibliográfico impreso (Libro), a la biblioteca de esta Unidad Academica.</tr>';
$pdf->WriteHTML(utf8_decode($html));
$pdf->Ln(); 
$pdf->MultiCell(60,5,utf8_decode("Se anexan datos:"),0,'L'); 
$RYAUX=$pdf->GetY(); 
//Tabla---FILA 1
$pdf->Ln(5);
$pdf->SetFont("Arial","B",10);
$pdf->SetFillColor(198, 198,198);
$pdf->SetXY(10,$RYAUX+5);
$pdf->MultiCell(49,10,utf8_decode("TITULO"),1,'C',true); 
$pdf->SetXY(59,$RYAUX+5);
$pdf->MultiCell(48,10,utf8_decode("AUTOR"),1,'C',true);
$pdf->SetXY(107,$RYAUX+5);
$pdf->MultiCell(48,10,utf8_decode("ISBN"),1,'C',true);
$pdf->SetXY(155,$RYAUX+5);
$pdf->MultiCell(50,10,utf8_decode("PIE DE IMPRENTA"),1,'C',true);
$RYAUX2=$pdf->GetY(); 
//Tabla---Fila 2
$pdf->SetFont("Arial","",10);
$pdf->SetXY(10,$RYAUX+15);
$pdf->MultiCell(49,5,utf8_decode($celdaTitulo),0,'L'); 
$RY1=$pdf->GetY(); 
$pdf->SetXY(59,$RYAUX+15);
$pdf->MultiCell(48,5,utf8_decode($celdaAutor),0,'L');
$RY2=$pdf->GetY();
$pdf->SetXY(107,$RYAUX+15);
$pdf->MultiCell(48,5,utf8_decode($celdaISBN),0,'L');
$RY3=$pdf->GetY();
$pdf->SetXY(155,$RYAUX+15);
$pdf->MultiCell(50,5,utf8_decode($celdaImprenta),0,'L');
$RY4=$pdf->GetY();
$tamoFinal=tamanoRec($RY1,$RY2,$RY3,$RY4);
$pdf->Rect(10,$RYAUX+15,49,$tamoFinal-$RYAUX2,"D");
$pdf->Rect(59,$RYAUX+15,48,$tamoFinal-$RYAUX2,"D");
$pdf->Rect(107,$RYAUX+15,48,$tamoFinal-$RYAUX2,"D");
$pdf->Rect(155,$RYAUX+15,50,$tamoFinal-$RYAUX2,"D");
//Ante pie de pagina 
$pdf->Ln(5); 
$pdf->SetFont("Arial","",12);
$pdf->MultiCell(195,5,utf8_decode("A petición de los interesados y para los fines que estimen convenientes, se extiende la presente en la Ciudad de Zacatecas, Zac., ".fechaTXT($fechaDia,$fechaMes,$fechaAnio)),0,'L');
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->MultiCell(195,5,utf8_decode("ATENTAMENTE \n".chr(34)."La Técnica al Servicio de la Patria".chr(34)),0,'L'); 
$RYAUX3=$pdf->GetY(); 
$pdf->Image('Imagenes/Firma.PNG','10',$RYAUX3-15,'70','45','PNG');  
$pdf->Image('Imagenes/Sello.png','75',$RYAUX3-8,'70','50','PNG'); 
$pdf->MultiCell(195,5,utf8_decode("\n\n\n\n__________________________________\nM.H.P.E. - T.E ".$celdaResponsable."\nJefe del Departamento de Servicios Estudiantiles."),0,'L'); 
$pdf->ln();
$pdf->SetFont("Arial","",8);
$pdf->MultiCell(195,2,utf8_decode("c.c.p. L.B.I. María del Carmen García Ortiz. Responsable de Bilbioteca\n
c.c.p. Consecutivo"),0,'L');
$RYAUX4=$pdf->GetY();  
//Pie de pagina
$pdf->SetXY(10,$RYAUX4+25);
$pdf->SetFont("Arial","",8);
$pdf->MultiCell(200,2,utf8_decode("Calle Circuito Cerro del Gato Gato No. 202,Col. Ciudad Administrativa, Zac. Zac\n
C.P.98160Tel:55-57296000 ext. 83516, correo electrónico: oramos@ipn.mx\n
_____________________________________________________________________________________________________________________________"),0,'L'); 
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
        return utf8_decode(" al dia ".$arrayDia[$dia]." del mes de ".$arrayMes[$mes]." del ".$arrayAno[$anio-2020].".");   
    }else{
        return utf8_decode(" a los ".$arrayDia[$dia]." del mes de ".$arrayMes[$mes]." del ".$arrayAno[$anio].".");   
    }   
}
//Ojala se pudiera hacer sobrecarga
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
function tamanoRec($y1,$y2,$y3,$y4){
    $ValorFinal=0;
    if(($y1 > $y2) && ($y1 > $y3) && ($y1 > $y4)){
    $ValorFinal=$y1;
    }elseif(($y2 > $y1) && ($y2 > $y3) && ($y2 > $y4)){
    $ValorFinal=$y2;
    }elseif(($y3 > $y2) && ($y3 > $y2) && ($y3 > $y4)){
    $ValorFinal=$y3;
    }elseif(($y4 > $y1) && ($y4 > $y2) && ($y4 > $y3)){
    $ValorFinal=$y4; 
    }else{
    $ValorFinal=$y1;
    }
    return $ValorFinal;
}
?> 