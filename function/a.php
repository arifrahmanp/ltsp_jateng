<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
  
   </style>
</head>
<body>

<p align="center">
  <img src="../image/logo_kumham.png" width="50" height="50">
</p>
<h1 style="text-align: center;">LTSP</h1>
<p style="text-align: center;">Kemenkumham Jawa Tengah</p>
<table border="0" width="100%">
<br>
<br>
<?php
// Load file koneksi.php
$koneksi = mysqli_connect('localhost', 'root', '', 'antrian') or die ('Database tidak ditemukan');

$query = "SELECT * FROM tb_antrian order by id_antrian desc limit 1"; // Tampilkan semua data gambar
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql

        echo "<tr>";
        echo "<th>"."No Antrian"."</th>";
        echo "<td>".":"."</td>";
        echo "<td>".$data['no_antrian']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Layanan"."</th>";
        echo "<td>".":"."</td>";
        echo "<td>".$data['pelayanan']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Nama"."</th>";
        echo "<td>".":"."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Jumlah Permohonan"."</th>";
        echo "<td>".":"."</td>";
        echo "<td>".$data['jumlah']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>"."Tanggal"."</th>";
        echo "<td>".":"."</td>";
        echo "<td>".$data['tanggal']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
<p align="center">----- TERIMA KASIH -----</p>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P',array(100,80),'en');
$pdf->WriteHTML($html);
$pdf->Output('antrian LTSP.pdf', 'D');
?>