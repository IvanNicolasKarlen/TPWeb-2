

<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf extends Dompdf{
	
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	
	
	
}
/*
$pdf= new FPDF();

$pdf->AddPage(); //Añadir una pagina
$pdf->SetFont('Arial','B',16);//Fuentes



$pdf->Cell(40,10,utf8_decode($mostrar)); //Celda de 40 de ancho y 10 de alto
$pdf->Output(); //Imprimir en pdf
require('fpdf/fpdf.php');
include_once ("../../conexionBD/conexion.php");
$conexion = new Conexion();
*/

?>

