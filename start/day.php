<?php
if(!empty($_POST['submit']))
{
	$f_name = $_POST['first_name'];
	$l_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
}
require("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Cell(10,10,"Certificates");


$pdf->output();

?>