<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script>
        $(document).ready(function(){
                $('#ambil-antrian').click(function(){                
                    
                        /*Clear all input type="text" box*/
                      $('#form1 #id_nik').value('');
                  }                   
             });
    
</script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
    <title></title>
</head>
<body>
<?php
include '../function/koneksi.php';

$koneksi = mysqli_connect('localhost', 'root', '', 'antrian') or die ('Database tidak ditemukan');
$query = mysqli_query($koneksi, "SELECT max(no_antrian) as maxKode FROM tb_antrian");
$data = mysqli_fetch_array($query);
$nomor = $data['maxKode'];
$antrian = (int) substr($nomor, 6, 3);
$antrian++;
$char = "JATENG";
$no_antrian = $char . sprintf("%03s", $antrian);
?>
<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Form Ambil Antrian</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="../menu.html">Halaman Sebelumnya</a></div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="../function/inputantrian.php" id="form1" target="_blank">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                    <form  class="form-horizontal" method="post" >
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                        <div id="div_id_select" class="form-group required">
                            <label for="id_select"  class="control-label col-md-4  requiredField"> Jenis Pemohon<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"><input type="radio" checked="checked" name="jenis_pemohon" id="id_select_1" value="perorangan"  style="margin-bottom: 10px">Perorangan</label>
                                <label class="radio-inline"> <input type="radio" name="jenis_pemohon" id="id_select_2" value="instansi"  style="margin-bottom: 10px">Perusahaan/Instansi </label>
                            </div>
                        </div> 
                    <!--    <div id="div_id_As" class="form-group required">
                            <label for="id_As"  class="control-label col-md-4  requiredField">As<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"> <input type="radio" name="As" id="id_As_1" value="I"  style="margin-bottom: 10px">Individual </label>
                                <label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Company/Institute </label>
                            </div>
                        </div> -->
                        <div id="div_id_nik" class="form-group required">
                            <label for="id_nik" class="control-label col-md-4  requiredField">NIK<span class="asteriskField"></span></label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_nik" maxlength="30" name="nik" placeholder="Nomor Induk Kependudukan" style="margin-bottom: 10px" type="text" required oninvalid="this.setCustomValidity('field tidak boleh kosong')" oninput="setCustomValidity('')" />
                            </div>
                        </div>
                        <div id="div_id_nama" class="form-group required">
                            <label for="id_name" class="control-label col-md-4  requiredField">Nama Lengkap<span class="asteriskField"></span></label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_nama" maxlength="30" name="nama" placeholder="Nama lengkap anda" style="margin-bottom: 10px" type="text" required oninvalid="this.setCustomValidity('field tidak boleh kosong')" oninput="setCustomValidity('')"/>
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Email aktif anda" style="margin-bottom: 10px" type="email" required oninvalid="this.setCustomValidity('field tidak boleh kosong')" oninput="setCustomValidity('')"/>
                            </div>     
                        </div>
                       
                        <div id="div_id_perusahaan" class="form-group required"> 
                            <label for="id_perusahaan" class="control-label col-md-4  requiredField"> Nama Perusahaan</label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_perusahaan" name="perusahaan" placeholder="Khusus pemohon Perusahaan/Instansi" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_telepon" class="form-group required">
                            <label for="id_telepon" class="control-label col-md-4  requiredField">Nomor Telepon<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_telepon" name="telepon" placeholder="Nomor telepon yang bisa dihubungi" style="margin-bottom: 10px" type="text" required oninvalid="this.setCustomValidity('field tidak boleh kosong')" oninput="setCustomValidity('')"/>
                            </div>
                        </div> 
                        <div id="div_id_layanan" class="form-group required">
                             <label for="id_layanan" class="control-label col-md-4  requiredField"> Jenis Pelayanan<span class="asteriskField"></span> </label>
                             <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <select class="selectpicker form-control" style="margin-bottom: 10px" name="pelayanan" onclick="layanan()" id="pelayanan">
                                     <option value="Keimigrasian">Keimigrasian</option>
                                     <option value="Pemasyarakatan">Pemasyarakatan</option>
                                     <option value="Kenotariatan">Kenotariatan</option>
                                     <option value="Kekayaan Intelektual">Kekayaan Intelektual</option>
                                     <option value="Komunikasi Masyarakat">Komunikasi Masyarakat</option>
                                     <option value="Konsultasi Bantuan Hukum">Konsultasi Bantuan Hukum</option>
                                  </select>
                               </div>
                            </div> 
                        </div> 
<!-- kode untuk menampilkan di texbox
                        <script type="text/javascript">
                            $(document).ready(function(e) {
                                $("#pelayanan").change(function(){
                                    var textval = $(":selected",this).val(); 
                                    $('input[name=kode_pelayanan]').val(textval);
                                    
                                })
                            });
                        </script>
-->
                        <div id="div_id_jumlah" class="form-group required"> 
                            <label for="id_jumlah" class="control-label col-md-4  requiredField"> Jumlah Permohonan</label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_jumlah" name="jumlah" placeholder="Banyaknya permohonan" style="margin-bottom: 10px" type="number" required oninvalid="this.setCustomValidity('field tidak boleh kosong')" oninput="setCustomValidity('')"/>
                            </div>
                        </div>

                        <div id="div_id_date" class="form-group required">
                            <label for="id_date" class="control-label col-md-4  requiredField"> Pilih Tanggal<span class="asteriskField"></span> </label>
                                    <div class='col-sm-4'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker4'>
                                                <input type='text' class="form-control" name="tanggal" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $(function() {              
                                           // Bootstrap DateTimePicker v4
                                           $('#datetimepicker4').datetimepicker({
                                                 format: 'DD/MM/YYYY'
                                           });
                                        });      
                                    </script>
                        </div>

<!--                    <div id="div_id_nomor" class="form-group required"> 
                            
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="kode_pelayanan" name="kode_pelayanan" placeholder="" style="margin-bottom: 10px" type="hidden" />
                            </div>
                        </div>
-->
                        <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="no_antrian" name="no_antrian" value="<?php echo $no_antrian; ?>" placeholder="" style="margin-bottom: 10px" type="hidden" />
                            </div>
                        </div>
                        
                        <!--
                        <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <div id="div_id_terms" class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                         <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                         Apakah data sudah benar?
                                    </label>
                                </div> 
                                    
                            </div>
                        </div> 
                        -->    

                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="ambil" value="Ambil Antrian" class="btn btn-primary btn btn-info" id="ambil-antrian" />
                            </div>
                        </div> 
                            
                            <script type="text/javascript" src="form_submit_script.js"></script>
                    </form>

                </form>
            </div>
        </div>
    </div> 
</div>
    
</div>

</body>
</html>            