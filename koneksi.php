<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$conn=mysqli_connect("localhost","root","","pans") or die ("koneksi ke server gagal");
	mysqli_select_db($conn, "pans") or die ("koneksi ke server gagal");
	?>
</body>
</html>