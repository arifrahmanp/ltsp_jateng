<?php
	include '../koneksi.php';


	$namalengkap = $_POST['namalengkap'];
	$nik	= $_POST['nik'];
	$alamat	= $_POST['alamat'];
	$no_pendaftaran = $_POST['no_pendaftaran'];
	$no_telepon	= $_POST['telepon'];
//	if (isset($_POST['jenislayanan'])) {
//		# code...
//		$jenislayanan = $_POST['jenislayanan'];
//	}
#	if (isset($_POST['no_pendaftaran'])) {
		# code...
#		$no_pendaftaran = $_POST['no_pendaftaran'];
#	}


	if (isset($_POST['upload'])) {
		# code...
		$ekstensi_diperbolehkan = array('rar','zip','jpg','jpeg','png','pdf');

		$ktp = $_FILES['ktp']['name'];
		$a = explode('.', $ktp);
		$ktp_ukuran = $_FILES['ktp']['size'];
		$ktp_tmp = $_FILES['ktp']['tmp_name'];	#upload KTP

		$akta = $_FILES['akta']['name'];
		$b = explode('.', $akta);
		$akta_ukuran = $_FILES['akta']['size'];
		$akta_tmp = $_FILES['akta']['tmp_name'];	#upload akta

		$deskripsi = $_FILES['deskripsi']['name'];
		$c = explode('.', $deskripsi);
		$deskripsi_ukuran = $_FILES['deskripsi']['size'];
		$deskripsi_tmp = $_FILES['deskripsi']['tmp_name'];	#upload deskripsi

		$abstrak = $_FILES['abstrak']['name'];
		$d = explode('.', $abstrak);
		$abstrak_ukuran = $_FILES['abstrak']['size'];
		$abstrak_tmp = $_FILES['abstrak']['tmp_name'];	#upload form dgip

		$terjemahan = $_FILES['terjemahan']['name'];
		$e = explode('.', $terjemahan);
		$terjemahan_ukuran = $_FILES['terjemahan']['size'];
		$terjemahan_tmp = $_FILES['terjemahan']['tmp_name'];	#upload terjemahan

		$kuasa = $_FILES['kuasa']['name'];
		$f = explode('.', $kuasa);
		$kuasa_ukuran = $_FILES['kuasa']['size'];
		$kuasa_tmp = $_FILES['kuasa']['tmp_name'];

		$formulir = $_FILES['formulir']['name'];
		$g = explode('.', $formulir);
		$formulir_ukuran = $_FILES['formulir']['size'];
		$formulir_tmp = $_FILES['formulir']['tmp_name'];

		$pengalihan = $_FILES['pengalihan']['name'];
		$h = explode('.', $pengalihan);
		$pengalihan_ukuran = $_FILES['pengalihan']['size'];
		$pengalihan_tmp = $_FILES['pengalihan']['tmp_name'];	#upload surat kuasa


		$ekstensi = strtolower(end($a));


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ktp_ukuran < 1044070 && $akta_ukuran < 1044070 && $deskripsi_ukuran < 1044070 && $abstrak_ukuran < 1044070 && $terjemahan_ukuran < 1044070 && $kuasa_ukuran < 1044070 && $formulir_ukuran < 1044070 && $pengalihan_ukuran < 1044070){			
					move_uploaded_file($ktp_tmp, 'files/'.$ktp);
					move_uploaded_file($akta_tmp, 'files/'.$akta);
					move_uploaded_file($deskripsi_tmp, 'files/'.$deskripsi);
					move_uploaded_file($abstrak_tmp, 'files/'.$abstrak);			#untuk memindahkan hasil upload ke folder tujuan
					move_uploaded_file($terjemahan_tmp, 'files/'.$terjemahan);
					move_uploaded_file($kuasa_tmp, 'files/'.$kuasa);
					move_uploaded_file($formulir_tmp, 'files/'.$formulir);
					move_uploaded_file($kuasa_tmp, 'files/'.$pengalihan);
					$query = mysqli_query($koneksi, "INSERT INTO daftarpaten VALUES(NULL, '$namalengkap','$nik', '$alamat','$no_telepon','Paten','$no_pendaftaran','$ktp','$akta','$deskripsi','$abstrak','$terjemahan','$kuasa','$formulir','$pengalihan','Belum Terverifikasi','')");
					if($query){
						echo "<script>alert('Data berhasil di tambahkan!');history.go(-2);</script>";
					}else{
						echo "<script>alert('Gagal di tambahkan!');</script>";
					}
			
		}
}
}
?>