<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h1>Silahkan Login atau Daftar</h1>
	<div class="container">
        <?php
			if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])){
				include 'user.php';
				$user = new User();
				$kondisi['where'] = array(
					'id' => $sesiData['userID'],
				);
				$kondisi['return_type'] = 'single';
				$userData = $user->getRows($kondisi);
				header("location:../") 
		?>
        
        <?php }else{ ?>
		<h3>Login ke akun Anda</h3>
        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
		<div class="regisForm">
			<form action="akunuser.php" method="post">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Pssword" required="">
				<div class="tbl-kirim">
					<input type="submit" name="loginSubmit" value="Login">
				</div>
			</form>
		</div>
        
	</div>
	<p><a href="daftar.php">Buat Akun</a></p>
	<?php } ?>
</body>
</html>