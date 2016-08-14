<?php 
require_once '../core/koneksi.php';

$nama1 = ((isset($_POST['namadepan']))?$_POST['namadepan'] : '');
$nama2 = ((isset($_POST['namabelakang']))?$_POST['namabelakang'] : '');
$email = ((isset($_POST['email']))?$_POST['email'] : '');
$password = ((isset($_POST['password']))?$_POST['password'] : '');
$kpassword = ((isset($_POST['kpassword']))?$_POST['kpassword'] : '');
$alamat = ((isset($_POST['alamat']))?$_POST['alamat'] : '');
$notelp = ((isset($_POST['notelp']))?$_POST['notelp'] : '');
$kon = '';

if ($_POST) {
	if ($nama1 == '' || $nama2 == '' || $email == '' || $password == '' || $kpassword == '' || $alamat == '' || $notelp == '') {
		$kon = '<div class="alert alert-danger" role="alert"> Semua Formulir Harus diisi</div>';
	
	}elseif ($password != $kpassword) {
		$kon = '<div class="alert alert-danger" role="alert"> Password tidak cocok </div>';
	}
	else{

	$inmember = "INSERT INTO `member` (`nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `nomertelp`) VALUES ('$nama1', '$nama2', '$email', '$password', '$alamat', '$notelp')";
		$db->query($inmember);
		header('Location: login.php');
	}

}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="../asset/css/startertemplate.css" rel="stylesheet">

  
  </head>
  <body>
    <?php include "../include/nav.php"; ?>

    <div class="container">
    <h3>Register </h3>
    <?php if (isset($_SESSION['loggedin']) == false ) :?>
<div class="col-md-6">
	<?=$kon ;?>
	<form action="register.php" method="POST">
		<div class="form-group">
			<label for="namadepan">Nama Depan</label>
            <input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" value="<?=$nama1;?>">
		</div>
		<div class="form-group">
			<label for="namabelakang">Nama Belakang</label>
            <input type="text" class="form-control" name="namabelakang" placeholder="Nama Belakang" value="<?=$nama2;?>">
		</div>
		<div class="form-group">
			<label for="email">Alamat Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$email;?>">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?=$password;?>">
		</div>
		<div class="form-group">
			<label for="kpassword">Konfirmasi Password</label>
           <input type="password" class="form-control" name="kpassword" placeholder="Konfirmasi Password" value="<?=$kpassword;?>">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" rows="4" name="alamat" placeholder="Alamat"><?=$alamat;?></textarea>
		</div>
		<div class="form-group">
			<label for="notelp">Nomer Telepon</label>
            <input type="number" class="form-control" name="notelp" placeholder="Nomer Telepon" value="<?=$notelp;?>">
		</div>
	
		<div class="form-group">
            <input type="submit"  value="Kirim" class="btn btn-primary">
		</div>
	</form>
</div>
<?php endif;?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>