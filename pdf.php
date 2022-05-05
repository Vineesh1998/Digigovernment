<?php 
	include 'db/connect.php';
	require('fpdf/fpdf.php');
	$date = date("d/m/Y");
	$place = "Kulathupuzha";
	$pdf=new FPDF();
	$id = $_GET['id'];
	$sql = "Select * from death where id ='$id'";
	$res = mysqli_query($conn,$sql);
	$row1 = mysqli_fetch_array($res);
	$dead_id = $row1['dead_id'];
	$cause = $row1['cause'];

	$sql2 = "select * from user where civil_id = '$dead_id'";
	$query = mysqli_query($conn,$sql2);
	$row2 = mysqli_fetch_array($query);

	$name = $row2['name'];
	$age = $row2['age'];
	$gender = $row2['gender'];

	$pdf->AddPage();
  
// Set the font for the text
	$pdf->SetFont('Arial', '', 18);
// Prints a cell with given text 
	$pdf->Cell(190,20,'GOVERNMENT OF KERALA',0,5,'C');
  	$pdf->Image('img/about.jpeg',90,30,30);

  	$pdf->SetFont('Arial', 'BU',18);
  	$pdf->Cell(0,50,'Death Certificate',0,1,'C');
  	$pdf->SetFont('Arial', '',10);
  	$pdf->Cell(100,5,'Date : '.$date,0,0,'');
  	$pdf->Cell(100,5,'Place : '.$place,0,1,'C');
  	$pdf->SetFont('Arial', '',14);
  	$pdf->Cell(0,20,'This is to cerify that the person with the following information has passed away',0,1,'C');
  	$pdf->Cell(30,10,'',0,0,'');$pdf->Cell(40,10,'Name ',0,0,'');$pdf->Cell(30,10,':',0,0,'');$pdf->Cell(30,10,$name,0,1,'');
  	$pdf->Cell(30,10,'',0,0,'');$pdf->Cell(40,10,'Age  ',0,0,'');$pdf->Cell(30,10,':',0,0,'');$pdf->Cell(30,10,$age,0,1,'');
  	$pdf->Cell(30,10,'',0,0,'');$pdf->Cell(40,10,'Gender  ',0,0,'');$pdf->Cell(30,10,':',0,0,'');$pdf->Cell(30,10,$gender,0,1,'');
  	$pdf->Cell(30,10,'',0,0,'');$pdf->Cell(40,10,'Cause of Death ',0,0,'');$pdf->Cell(30,10,':',0,0,'');$pdf->Cell(30,10,$cause,0,1,'');
  	$pdf->Cell(0,20,'',0,1,'');
  	$pdf->SetFont('Arial', '',12);
  	$pdf->Cell(0,10,'We hereby verify that the death of the '.$name.' is registered to the panchayat body and',0,1,'');
  	$pdf->Cell(0,10,'cancellation of all the documents related to the died person has taken place.',0,1,'');
  	$pdf->Cell(120,30,' ',0,1,'');
  	$pdf->SetFont('Arial', '',14);
  	$pdf->Cell(100,10,' ',0,0,'');$pdf->Cell(40,10,'Digital Signature  ',0,1,'');
  	$pdf->Cell(110,10,' ',0,0,'');$pdf->Cell(40,10,'Digital Signed By PANCHAYAT ',0,0,'');
  	// return the generated output
	$pdf->Output();


  
?>
