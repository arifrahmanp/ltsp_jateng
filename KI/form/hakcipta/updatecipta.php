<?php
	include '../koneksi.php';


	$namalengkap = $_POST['nama'];
	$nik	= $_POST['nik'];
	$alamat	= $_POST['alamat'];
	$no_telepon	= $_POST['telepon'];
	$id_cipta = $_POST['id_cipta'];
//	if (isset($_POST['jenislayanan'])) {
//		# code...
//		$jenislayanan = $_POST['jenislayanan'];
//	}
#	if (isset($_POST['no_pendaftaran'])) {
		# code...
#		$no_pendaftaran = $_POST['no_pendaftaran'];
#	}


	if (isset($_POST['update'])) {
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

		$formulir = $_FILES['formulir']['name'];
		$c = explode('.', $formulir);
		$formulir_ukuran = $_FILES['formulir']['size'];
		$formulir_tmp = $_FILES['formulir']['tmp_name'];	#upload formulir

		$contohcipta = $_FILES['contohcipta']['name'];
		$d = explode('.', $contohcipta);
		$contohcipta_ukuran = $_FILES['contohcipta']['size'];
		$contohcipta_tmp = $_FILES['contohcipta']['tmp_name'];	#upload form dgip

		$npwp = $_FILES['npwp']['name'];
		$e = explode('.', $npwp);
		$npwp_ukuran = $_FILES['npwp']['size'];
		$npwp_tmp = $_FILES['npwp']['tmp_name'];	#upload npwp

		$pernyataan = $_FILES['pernyataan']['name'];
		$f = explode('.', $pernyataan);
		$pernyataan_ukuran = $_FILES['pernyataan']['size'];
		$pernyataan_tmp = $_FILES['pernyataan']['tmp_name'];


		$pengalihan = $_FILES['pengalihan']['name'];
		$g = explode('.', $pengalihan);
		$pengalihan_ukuran = $_FILES['pengalihan']['size'];
		$pengalihan_tmp = $_FILES['pengalihan']['tmp_name'];	#upload surat pernyataan


		$ekstensi = strtolower(end($a));


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ktp_ukuran < 1044070 && $akta_ukuran < 1044070 && $formulir_ukuran < 1044070 && $contohcipta_ukuran < 1044070 && $npwp_ukuran < 1044070 && $pernyataan_ukuran < 1044070 && $pengalihan_ukuran < 1044070){			
					move_uploaded_file($ktp_tmp, 'files/'.$ktp);
					move_uploaded_file($akta_tmp, 'files/'.$akta);
					move_uploaded_file($formulir_tmp, 'files/'.$formulir);
					move_uploaded_file($contohcipta_tmp, 'files/'.$contohcipta);			#untuk memindahkan hasil upload ke folder tujuan
					move_uploaded_file($npwp_tmp, 'files/'.$npwp);
					move_uploaded_file($pernyataan_tmp, 'files/'.$pernyataan);
					move_uploaded_file($pengalihan_tmp, 'files/'.$pengalihan);
					$query = mysqli_query($koneksi, "UPDATE daftarcipta SET namalengkap = '$namalengkap', nik = '$nik', alamat = '$alamat', no_telepon = '$no_telepon', ktp = '$ktp', akta = '$akta', formulir = '$formulir', contohcipta = '$contohcipta', npwp = '$npwp', pernyataan = '$pernyataan', pengalihan = '$pengalihan' where id_cipta = '$id_cipta'");
					if($query){
						echo "<script>alert('Data berhasil di tambahkan!');history.go(-2);</script>";
					}else{
						echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
					}
			
		}
}
}
?>