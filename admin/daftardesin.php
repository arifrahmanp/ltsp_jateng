<!doctype html>

<html lang="en">
<head>

    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/icon_kumham.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <!-- Datepicker-->
    
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   

</head>
<body>



<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Selamat Datang Admin
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="antrian.php">
                        <i class="pe-7s-graph"></i>
                        <p>Antrian</p>
                    </a>
                </li>
                
            </ul>

            <ul class="nav">
                <li class="active">
                    <a href="daftarmerek.php">
                        <i class="pe-7s-graph"></i>
                        <p>Pendaftaran Merek</p>
                    </a>
                </li>
                
            </ul>

            <ul class="nav">
                <li class="active">
                    <a href="daftardesin.php">
                        <i class="pe-7s-graph"></i>
                        <p>Pendaftaran Desain Industri</p>
                    </a>
                </li>
                
            </ul>

            <ul class="nav">
                <li class="active">
                    <a href="daftarpaten.php">
                        <i class="pe-7s-graph"></i>
                        <p>Pendaftaran Paten</p>
                    </a>
                </li>
                
            </ul>

        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                    
                
                <div class="collapse navbar-collapse">
                    
                        
                        
                       

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="./logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            include '../function/koneksi.php';
            $koneksi = mysqli_connect('localhost', 'root', '', 'antrian') or die ('Database tidak ditemukan');
        ?>
        <!--
        <form method="get">
        <table>
            <tr>
                <td><label>Filter Tanggal</label></td>
                  <td>:</td>
                  <td>
                        <input type="text" id="datepicker" width="276" name="filtertanggal" />
                        <script>
                            $('#datepicker').datepicker({
                                format:'dd/mm/yyyy'
                               // uiLibrary: 'bootstrap4'
                            });
                        </script>
                </td>
                <td>
                    <input type="submit" value="cari">
                </td>
            </tr>
        </table>
        </form>-->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <form action="" method="post">
                        <table border="1" cellpadding="0" cellspacing="0">
            <!--             <tr>
                                <th>No</th>
                                <th>Antrian</th>
                                <th>Jenis Pemohon</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Perusahaan</th>
                                <th>Telepon</th>
                                <th>Pelayanan</th>
                                <th>Jumlah Permohonan</th>
                                <th>Tanggal</th>
                            </tr> -->
           <!--                 
                            <?php
                                $no = 1;
         
                                if(isset($_GET['filtertanggal'])){
                                    $tgl = $_GET['filtertanggal'];
                                    $sql = mysqli_query($koneksi,"select * from daftardi where tanggal='$tgl'");
                                }else{
                                    $sql = mysqli_query($koneksi,"select * from tb_antrian");
                                }
                                
                                while($data = mysqli_fetch_array($sql)){
                            ?>
                            <tr>
                                <td><?php echo $no++; } ?></td>
                                <td><?php echo $data["no_antrian"];?></td>
                                <td><?php echo $data["jenis_pemohon"];?></td>
                                <td><?php echo $data["nik"];?></td>
                                <td><?php echo $data["nama"];?></td>
                                <td><?php echo $data["email"];?></td>
                                <td><?php echo $data["perusahaan"];?></td>
                                <td><?php echo $data["telepon"];?></td>
                                <td><?php echo $data["pelayanan"];?></td>
                                <td><?php echo $data["jumlah"];?></td>
                                <td><?php echo $data["tanggal"];?></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div> -->

                       
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        include '../function/koneksi.php';
                        $koneksi = mysqli_connect('localhost', 'root', '', 'antrian') or die ('Database tidak ditemukan');
                        $query = mysqli_query($koneksi,"SELECT * FROM daftardi ORDER BY id_di ASC");
                    ?>
                    <form action="" method="post">
                        <table border="1" cellpadding="0" cellspacing="0" class="table1">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No Pendaftaran</th>
                                <th>KTP</th>
                                <th>Akta</th>
                                <th>Gambar Desain</th>
                                <th>Uraian</th>
                                <th>Pernyataan</th>
                                <th>Pengalihan Hak</th>
                                <th>Bukti Prioritas</th>
                                <th>Kuasa</th>
                                <th>Status</th>
                                <th>Keterangan </th>
                            </tr>
                            <?php if(mysqli_num_rows($query)>0){ ?>
                            <?php
                                $no = 1;
                                while($data = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data["namalengkap"];?></td>
                                <td><?php echo $data["nik"];?></td>
                                <td><?php echo $data["no_pendaftaran"];?></td>
                                <td><?php echo $data["ktp"];?></td>
                                <td><?php echo $data["akta"];?></td>
                                <td><?php echo $data["gambardi"];?></td>
                                <td><?php echo $data["uraiandi"];?></td>
                                <td><?php echo $data["suratpernyataan"];?></td>
                                <td><?php echo $data["pengalihanhak"];?></td>
                                <td><?php echo $data["buktiprioritas"];?></td>
                                <td><?php echo $data["kuasa"];?></td>
                                <td><?php echo $data["status1"];?></td>
                                <td><?php echo $data["keterangan"];?></td>
                            </tr>
                            <?php $no++; } ?>
                            <?php } ?>
                        </table>
                    </form>
                </div>



            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; LTSP Kemenkumham Jawa Tengah
                </p>
            </div>
        </footer>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        
</body>
    

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <!--<script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                message: "Selamat Datang Admin"

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>-->

    
</html>