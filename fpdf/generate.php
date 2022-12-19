<?php
require("fpdf.php");

$pdf= new FPDF();

if(isset($_POST['create'])) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];


    $pdf->AddPage();
    $pdf->SetFont("arial", "B", 19);
    $pdf->Cell(190,10,"userInfo",1,1,'C');
    $pdf->Cell(50,10,"firstname",1,0);
    $pdf->Cell(140,10,$fname,1,1);

    $pdf->Cell(50,10,"surname",1,0);
    $pdf->Cell(140,10,$sname,1,1);

    $pdf->Cell(50,10,"username",1,0);
    $pdf->Cell(140,10,$uname,1,1);

    $pdf->Cell(50,10,"email",1,0);
    $pdf->Cell(140,10,$email,1,1);

    $pdf->Output();
}
?>