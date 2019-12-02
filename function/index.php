<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm', array(150,100));
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',11);
// mencetak string 
$pdf->Cell(80,7,'Layanan Terpadu Satu Pintu',0,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,7,'Kantor Wilayah Kementerian Hukum dan HAM',0,1,'C');
$pdf->Cell(80,7,'Jawa Tengah',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'No Antrian',0);
$pdf->Cell(85,6,'Nama',0);

$pdf->SetFont('Arial','',10);

include '../function/koneksi.php';
$nomor = mysqli_query($konek, "select * from tb_antrian where no_antrian ='$_POST[no_antrian]");
while ($row = mysqli_fetch_array($nomor)){
    $pdf->Cell(20,6,$row['no_antrian'],0);
    $pdf->Cell(85,6,$row['nama'],0);
}

$pdf->Output();
?>
