<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'antrian';

$konek = mysqli_connect($host, $username, $password) or die('Koneksi gagal');
mysqli_select_db($konek, $database) or die ('Database tidak ditemukan');

?>