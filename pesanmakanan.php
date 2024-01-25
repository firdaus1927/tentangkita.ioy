<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesan Makanan</title>
<style>
        /* Gaya untuk bagian header */
        header {
            background-color: #1F263D ;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 600px;
            height: 100px;
        }

        /* Gaya untuk bagian menu navigasi */
        nav {
            background-color: #2F4580 ;
            color: #38A286 ;
            padding: 10px;
            width: 200px;
            height: 300px;
            display: inline-block;
            vertical-align: top; /* Mengatur posisi atas */
        }

        nav a {
            color: #F3F3F3 ;
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
            background-color: #333;
            color: #EBEBEB ;
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
    header('Location: login.php');
    exit();
}
$email =$_SESSION['email'];
// Proses transaksi pemesanan makanan dan minuman
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
    // Di sini Anda dapat menambahkan logika untuk proses pemesanan
	// Setelah selesai, simpan data ke dalam session
    $makanan = $_POST['makanan']; // Simpan email ke dalam session
    $_SESSION['makanan'] = $_POST['makanan']; // Simpan makanan ke dalam session
	 header('Location: pesanminuman.php');
    exit();
}
?>
	<h2>Selamat datang <?php echo $email; ?></h2>
<form method="post" action="">
    <h3>Pemesanan Makanan</h3>
    <!-- Daftar menu makanan -->
    <label for="makanan">Pilih Makanan:</label>
    <select id="makanan" name="makanan">
        <option value="Sate Goreng">Sate Goreng</option>
        <option value="Bubur Bakar">Bubur Bakar</option>
		<option value="Rica-Rica Kudanil">Rica-Rica Kudanil</option>
        <!-- Tambahkan opsi makanan lainnya -->
    </select><br><br>

	<button type="submit" name="order">Pesan Makanan</button>
</form>
</section>		
<footer>
        <p>&copy; Created by Priaidaman 2023 </p>
    </footer>
</body>
</html>