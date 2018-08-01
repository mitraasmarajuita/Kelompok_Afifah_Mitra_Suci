
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
$pdf->Cell(190,7,'SMA N 1 KECAMATAN GUNUANG OMEH',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA PENERIMA BEASISWA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(29,6,'TANGGAL LHR',1,0);
$pdf->Cell(27,6,'NO HP',1,1);


$pdf->SetFont('Arial','',10);

include 'koneksipdf.php';
$mahasiswa = mysqli_query($connect, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$row['nim'],1,0);
    $pdf->Cell(85,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(29,6,$row['tanggal_lahir'],1,0); 
    $pdf->Cell(27,6,$row['no_hp'],1,1);

    
}
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(325,10,'KOTOTINGGI, 17 AGUSTUS 2018',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(325,10,'MITRA ASMARA JUITA',0,1,'C');
$pdf->Output();
?>
