<?php
	include '../koneksi.php';


	$namalengkap = $_POST['nama'];
	$nik	= $_POST['nik'];
	$alamat	= $_POST['alamat'];
	$no_telepon	= $_POST['telepon'];
	$id_di = $_POST['id_di'];
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

		$gambardi = $_FILES['gambardi']['name'];
		$c = explode('.', $gambardi);
		$gambardi_ukuran = $_FILES['gambardi']['size'];
		$gambardi_tmp = $_FILES['gambardi']['tmp_name'];	#upload gambardi

		$uraiandi = $_FILES['uraiandi']['name'];
		$d = explode('.', $uraiandi);
		$uraiandi_ukuran = $_FILES['uraiandi']['size'];
		$uraiandi_tmp = $_FILES['uraiandi']['tmp_name'];	#upload form dgip

		$suratpernyataan = $_FILES['suratpernyataan']['name'];
		$e = explode('.', $suratpernyataan);
		$suratpernyataan_ukuran = $_FILES['suratpernyataan']['size'];
		$suratpernyataan_tmp = $_FILES['suratpernyataan']['tmp_name'];	#upload suratpernyataan

		$pengalihanhak = $_FILES['pengalihanhak']['name'];
		$f = explode('.', $pengalihanhak);
		$pengalihanhak_ukuran = $_FILES['pengalihanhak']['size'];
		$pengalihanhak_tmp = $_FILES['pengalihanhak']['tmp_name'];

		$buktiprioritas = $_FILES['buktiprioritas']['name'];
		$g = explode('.', $buktiprioritas);
		$buktiprioritas_ukuran = $_FILES['buktiprioritas']['size'];
		$buktiprioritas_tmp = $_FILES['buktiprioritas']['tmp_name'];

		$kuasa = $_FILES['kuasa']['name'];
		$h = explode('.', $kuasa);
		$kuasa_ukuran = $_FILES['kuasa']['size'];
		$kuasa_tmp = $_FILES['kuasa']['tmp_name'];	#upload surat pengalihanhak


		$ekstensi = strtolower(end($a));


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ktp_ukuran < 1044070 && $akta_ukuran < 1044070 && $gambardi_ukuran < 1044070 && $uraiandi_ukuran < 1044070 && $suratpernyataan_ukuran < 1044070 && $pengalihanhak_ukuran < 1044070 && $buktiprioritas_ukuran < 1044070 && $kuasa_ukuran < 1044070){			
					move_uploaded_file($ktp_tmp, 'files/'.$ktp);
					move_uploaded_file($akta_tmp, 'files/'.$akta);
					move_uploaded_file($gambardi_tmp, 'files/'.$gambardi);
					move_uploaded_file($uraiandi_tmp, 'files/'.$uraiandi);			#untuk memindahkan hasil upload ke folder tujuan
					move_uploaded_file($suratpernyataan_tmp, 'files/'.$suratpernyataan);
					move_uploaded_file($pengalihanhak_tmp, 'files/'.$pengalihanhak);
					move_uploaded_file($buktiprioritas_tmp, 'files/'.$buktiprioritas);
					move_uploaded_file($kuasa_tmp, 'files/'.$kuasa);
					$query = mysqli_query($koneksi, "UPDATE daftardi SET namalengkap = '$namalengkap', nik = '$nik', alamat = '$alamat', no_telepon ='$no_telepon', ktp = '$ktp', akta = '$akta', gambardi = '$gambardi', uraiandi = '$uraiandi', suratpernyataan = '$suratpernyataan', pengalihanhak = '$pengalihanhak',buktiprioritas='$buktiprioritas', kuasa = '$kuasa' where id_di = '$id_di'");
					if($query){
						echo "<script>alert('Data berhasil di tambahkan!');history.go(-2);</script>";
					}else{
						echo "<script>alert('Gagal di tambahkan!');history.go(-2);</script>";
					}
			
		}
}
}
?>