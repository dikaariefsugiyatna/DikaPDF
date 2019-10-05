<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'UNIVERSITAS DIKA ARIEF',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA UNIVERSITAS DIKA ARIEF',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'nim',1,0);
$pdf->Cell(35,6,'nama',1,0);
$pdf->Cell(27,6,'jenis_kelamin',1,0);
$pdf->Cell(65,6,'jurusan',1,0);
$pdf->Cell(30,6,'fakultas',1,1);


$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(30,6,$row['nim'],1,0);
    $pdf->Cell(35,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(65,6,$row['jurusan'],1,0);
    $pdf->Cell(30,6,$row['fakultas'],1,1); 
}

$pdf->Output();
?>