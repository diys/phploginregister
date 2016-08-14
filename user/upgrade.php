<?php 
require_once  '../core/koneksi.php';
include '../core/helper.php';

$upid = $_SESSION['userdb'];
echo $_SESSION['userdb'];
if (isset($_POST['blankRadio'])) {
 $db->query("UPDATE member SET keangotaan = 'premium' WHERE id = '$upid' ");
header('Location: userarea.php');
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

    <?php if (isset($_SESSION['loggedin']) == true ) :?>
      <div id="formregister">
      <div class="panel panel-default">
      <div class="panel-heading"><h3>Upgrade Premium</h3></div>
      <div class="panel-body">
      <p>Pilih metode pembayaran</p>

      <form action="upgrade.php" method="post">
      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="SMS">
      SMS
      </label>
      </div>

      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Paypal">
      Paypal
      </label>
      </div>

      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Bank Transfer">
      Bank Transfer
      </label>
      </div>

      <input type="submit" class="btn btn-primary" value="Konfirmasi">
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