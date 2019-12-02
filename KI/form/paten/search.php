<?php
include "../koneksi.php"; // Load file koneksi.php

$cari = $_POST['cari']; // Ambil data yang dikirim lewat AJAX
$query = mysqli_query($koneksi, "SELECT * FROM daftarpaten WHERE no_pendaftaran = '$cari'"); // Tampilkan 
$row = mysqli_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query
if($row > 0){ // Jika data lebih dari 0
  $data = mysqli_fetch_array($query); // ambil data tersebut
  
  // BUat sebuah array
  $callback = array(
    'status' => 'success', // Set array status dengan success
    'id_paten' => $data['id_paten'],
    'namalengkap' => $data['namalengkap'], 
    'nik' => $data['nik'], 
    'alamat' => $data['alamat'],
    'no_telepon' => $data['no_telepon'], 
    'no_pendaftaran' => $data['no_pendaftaran'],
    'status1' => $data['status1'],
    'keterangan' => $data['keterangan'],  
  );
}else{
  $callback = array('status' => 'failed'); // set array status dengan failed
}
echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>