<?php 
$db = mysqli_connect('mysql.idhostinger.com','u504111311_host','102938','u504111311_membe');
if (mysqli_connect_errno()) {
	echo "database connect error".mysql_connect_error();
	die();
}
session_start();

if (isset($_SESSION['userdb'])) {
	$memberid = $_SESSION['userdb'];
	$query = $db->query("SELECT * FROM member WHERE id = '$memberid' ");
	$datamember = mysqli_fetch_assoc($query);
}


?>