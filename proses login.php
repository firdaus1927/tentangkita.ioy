<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
session_start();
include "koneksi.php";

// Check if form is submitted
    $email = $_POST['email'];
    $password = $_POST['password'];
	
	$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);

   if ($row) {
	   $_SESSION['email'] = $email;
	   header("Location: pesanmakanan.php");
   } else {
	   echo "Account Anda <b>belum terdaftar</b> di web kami";
   }
?>
</body>
</html>