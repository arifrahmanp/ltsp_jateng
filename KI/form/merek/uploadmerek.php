<?php
	include '../koneksi.php';


	$nama	= $_POST['nama'];
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

		$ttd = $_FILES['ttd']['name'];
		$c = explode('.', $ttd);
		$ttd_ukuran = $_FILES['ttd']['size'];
		$ttd_tmp = $_FILES['ttd']['tmp_name'];	#upload ttd

		$form = $_FILES['form']['name'];
		$d = explode('.', $form);
		$form_ukuran = $_FILES['form']['size'];
		$form_tmp = $_FILES['form']['tmp_name'];	#upload form dgip

		$etiket = $_FILES['etiket']['name'];
		$e = explode('.', $etiket);
		$etiket_ukuran = $_FILES['etiket']['size'];
		$etiket_tmp = $_FILES['etiket']['tmp_name'];	#upload etiket

		$kuasa = $_FILES['kuasa']['name'];
		$f = explode('.', $kuasa);
		$kuasa_ukuran = $_FILES['kuasa']['size'];
		$kuasa_tmp = $_FILES['kuasa']['tmp_name'];	#upload surat kuasa


		$ekstensi = strtolower(end($a));


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ktp_ukuran < 1044070 && $akta_ukuran < 1044070 && $ttd_ukuran < 1044070 && $form_ukuran < 1044070 && $etiket_ukuran < 1044070 && $kuasa_ukuran < 1044070){			
					move_uploaded_file($ktp_tmp, 'files/'.$ktp);
					move_uploaded_file($akta_tmp, 'files/'.$akta);
					move_uploaded_file($ttd_tmp, 'files/'.$ttd);
					move_uploaded_file($form_tmp, 'files/'.$form);			#untuk memindahkan hasil upload ke folder tujuan
					move_uploaded_file($etiket_tmp, 'files/'.$etiket);
					move_uploaded_file($kuasa_tmp, 'files/'.$kuasa);
					$query = mysqli_query($koneksi, "INSERT INTO daftarmerek VALUES(NULL, '$nama','$nik', '$alamat','$no_telepon','Merek','$no_pendaftaran','$ktp','$akta','$ttd','$form','$etiket','$kuasa','Belum Terverifikasi','')");
					if($query){
						echo "<script>alert('Data berhasil di tambahkan!');history.go(-2);</script>";
					}else{
						echo "<script>alert('Gagal di tambahkan!');history.go(-2);</script>";
					}
			
		}
}
}
?>