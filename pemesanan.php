<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
        /* Gaya untuk bagian header */
        header {
            background-color: #47457A ;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 600px;
            height: 100px;
        }

        /* Gaya untuk bagian menu navigasi */
        nav {
            background-color: #3B687B;
            color: #fff;
            padding: 10px;
            width: 200px;
            height: 300px;
            display: inline-block;
            vertical-align: top; /* Mengatur posisi atas */
        }

        nav a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        nav a:hover {
            color: #ff0;
        }

        /* Gaya untuk bagian konten */
        section {
            padding: 20px;
            width: 380px; /* Sisakan ruang untuk margin antara elemen */
            height: 300px;
            display: inline-block;
            vertical-align: top; /* Mengatur posisi atas */
        }

        /* Gaya untuk bagian footer */
        footer {
            background-color: #42427F;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 600px;
            height: 50px;
        }
	body {
            padding-bottom: 60px; /* Tinggi footer ditambah margin tambahan */
            position: relative; /* Diperlukan untuk menjamin posisi relatif */
        }
    </style>
</head>

<body>
	<header>
        <h1>HOMEPAGE PRIAIDAMAN</h1>
    </header>
	<nav>
        <a href="login.php">Logout</a>
    </nav>
	<section>
	<?php
session_start();

// Fungsi untuk simulasi autentikasi pengguna
function authenticateUser($username, $password) {
    // Di sini dapat dilakukan pengecekan dengan database sesungguhnya
    // Misalnya, memeriksa keberadaan pengguna dan kata sandi yang cocok

    // Contoh autentikasi sederhana
    $validUsername = 'email'; // Ganti dengan username yang benar
    $validPassword = 'password'; // Ganti dengan password yang benar

    if ($username === $validUsername && $password === $validPassword) {
        return true;
    } else {
        return false;
    }
}

// Memeriksa jika pengguna sudah login, jika belum, arahkan ke halaman login
if (!isset($_SESSION['email'])) {
    header('Location: pesanminuman.php');
    exit();
}
$email =$_SESSION['email'];
$makanan =$_SESSION['makanan'];
$minuman =$_SESSION['minuman'];
?>

<!-- Form transaksi pemesanan -->
<h2>Selamat datang <?php echo $email; ?></h2>
<form method="post" action="">
    <h3>Pemesanan Makanan dan Minuman :</h3>
    <p>1. Email anda : <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></p>
    <p>2. Makanan yang dipesan : <?php echo isset($_SESSION['makanan']) ? $_SESSION['makanan'] : ''; ?></p>
    <p>3. Minuman yang dipesan : <?php echo isset($_SESSION['minuman']) ? $_SESSION['minuman'] : ''; ?></p>
	<h4>Terima kasih atas kunjungan anda :v</h4>

    
</form>
	</section>
	<footer>
    <p>&copy; Created by Priaidaman 1933 </p>
	</footer>

</body>
</html>