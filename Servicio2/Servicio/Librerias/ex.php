<?php
require('/xampp/htdocs/Servicio_Social/Librerias/html_table.php');
$nombreAlumnoMayuscula="m";
$boletaAlumno="n";
$carrera="l"; 
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$html='El que suscribe, hace constar que el '.'<b>'.$nombreAlumnoMayuscula.'</b>'.', con número de boleta '.$boletaAlumno.' egresada del Programa Académico de '.$carrera 
.' NO ADEUDA MATERIAL DOCUMENTAL en la biblioteca de esta Unidad Académica.';

$pdf->WriteHTML(utf8_decode($html));
$pdf->Output();
?>
