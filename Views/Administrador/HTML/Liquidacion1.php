<?php
include('pdf.php');

if(isset($_POST["hidden_html"]) && $_POST["hidden_html"] != '')
{
 $file_name = 'google_chart.pdf';
 $html = '<link rel="stylesheet" href="bootstrap.min.css"> <a class="logo"><img src="../../img/logo.png" style="margin-right: 21px;" alt=""></a> <h1 class="text-center">Liquidaciones</h1>';
 $html .= $_POST["hidden_html"];

 $pdf = new Pdf();
 $pdf->load_html($html);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}



require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Pdf extends Dompdf{
	
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	
	
	
}



?>
