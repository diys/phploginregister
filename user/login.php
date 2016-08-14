<?php 
require_once  '../core/koneksi.php';
include '../core/helper.php';

$email = ((isset($_POST['email']))?$_POST['email'] : '');
$password = ((isset($_POST['password']))?$_POST['password'] : '');
$peri = '';

if ($_POST) {
  if (empty($_POST['email']) || empty($_POST['password']) ){
    $peri = '<div class="alert alert-danger" role="alert"> Password dan Email Tidak Boleh Kosong</div>';
  }

  $query = $db->query("SELECT * FROM member WHERE email= '$email' ");
  $user = mysqli_fetch_assoc($query);
  $userc = mysqli_num_rows($query); 
  echo $userc;

  if ($peri=='' && $userc < 1 ) {
    $peri = '<div class="alert alert-danger" role="alert"> Email tidak terdaftar silahkan Register untuk mendatar </div>';
  }

  if ($user['email'] == $email && $user['password'] == $password) {
    $userid = $user['id'];
    login($userid);
  } else {
    $peri = '<div class="alert alert-danger" role="alert"> Password dan Email Tidak cocok</div>';
  }
}
?>


<!DOCTYPE html>
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
    <?php if (isset($_SESSION['loggedin']) == false ) :?>
      <div class="starter-template">
        <h1>Selamat Datang</h1>
        <p class="lead">Login dengan akun anda untuk masuk ke member area dan Register untuk pendaftaran member baru </p>
      </div>
      <div id="formregister">
      <div class="panel panel-default">
      <div class="panel-heading"><h3>Login</h3></div>
      <div class="panel-body">
      <?=$peri ;?>
      <form action="login.php" method="post">
          <div class="form-group">
             <label for="email">Email address</label>
             <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$email;?>">
          </div>
          <div class="form-group">
             <label for="password">Password</label>
             <input type="password" class="form-control" name="password" placeholder="Password" value="<?=$password;?>">
          </div>
          <input type="submit" value="Login" class="btn btn-primary">
          
          <button type="button" class="btn btn-default">Register</button>
        </form>
      </div>
      </div>
      </div>
    <?php endif ;?>

    <?php if (isset($_SESSION['loggedin']) == true ) :?>
      <div class="starter-template">
        <h1>Anda Sudah Login</h1>
        <p class="lead">Lakukan Logout untuk keluar dari akun anda </p>
      </div>
      <div id="formregister">
      <div class="panel panel-default">
      <div class="panel-heading"><h3>Logout</h3></div>
      <div class="panel-body">
      <p>Klik tombol logout untuk keluar dari akun</p>
       <form action="logout.php">
      <input type="submit" class="btn btn-warning btn-large"> 
      </form>
      </div>
      </div>
      </div>
    <?php endif; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>