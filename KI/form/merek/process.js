function search(){
	$("#loading").show(); // Tampilkan loadingnya

	$.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "search.php", // Isi dengan url/path file php yang dituju
        data: {cari : $("#cari").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
		},
		success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya

            if(response.status == "success"){ // Jika isi dari array status adalah success
				$("#id_merek").val(response.id_merek);
				$("#nama").val(response.namalengkap); // set textbox dengan id nama
				$("#nik").val(response.nik); // set textbox dengan id jenis kelamin
				$("#alamat").val(response.alamat); // set textbox dengan id telepon
				$("#telepon").val(response.no_telepon);
				$("#no_pendaftaran").val(response.no_pendaftaran);
				$("#ktp").val(response.ktp);
				$("#akta").val(response.akta);
				$("#ttd").val(response.ttd);
				$("#form").val(response.form);
				$("#etiket").val(response.etiket);
				$("#kuasa").val(response.kuasa);
				$("#status1").val(response.status1);
				$("#keterangan").val(response.keterangan); // set textbox dengan id alamat
			}
		},
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.responseText);
        }
    });
}

$(document).ready(function(){
	$("#loading").hide(); // Sembunyikan loadingnya

    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });

});
