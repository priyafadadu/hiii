<?php
require("fpdf.php");

$pdf= new FPDF();

if(isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $pdf->AddPage();
    $pdf->SetFont("arial", "B", 12);
    $pdf->Cell(190,10,"Displaydata",1,1,'C');
   $pdf->Cell(50,10,"name",1,0);
    $pdf->Cell(140,10,$name,1,1);

    $pdf->Cell(50,10,"email",1,0);
    $pdf->Cell(140,10,$email,1,1);

    $pdf->Cell(50,10,"address",1,0);
    $pdf->Cell(140,10,$address,1,1);



    $pdf->Output();
}
?>