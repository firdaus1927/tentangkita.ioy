<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesan Minuman</title>
	<style>
        /* Gaya untuk bagian header */
        header {
            background-color: #365097 ;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 600px;
            height: 100px;
        }

        /* Gaya untuk bagian menu navigasi */
        nav {
            background-color: #676FF7 ;
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
            background-color: #293BA0 ;
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
    // Contoh autentikasi sederhana
    $validUsername = 'email'; // Ganti dengan username yang benar
    $validPassword = 'password'; // Ganti dengan password yang benar

    if ($username === $validUsername && $password === $validPassword) {
        return true;
    } else {
        return false;
    }
}

// Memeriksa jika pengguna sudah login dan telah memesan makanan
if (!isset($_SESSION['email']) || !isset($_SESSION['makanan'])) {
    header('Location: pesanmakanan.php');
    exit();
}
$email =$_SESSION['email'];
$makanan =$_SESSION['makanan'];
// Simpan data dari form pesan makanan ke dalam session jika ada
	
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {
	$minuman = $_POST['minuman'];
    $_SESSION['minuman'] = $_POST['minuman']; // Simpan minuman ke dalam session
   header("Location: pemesanan.php");
    exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
    <p>Email anda : <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></p>
    <p>Makanan yang dipesan : <?php echo isset($_SESSION['makanan']) ? $_SESSION['makanan'] : ''; ?></p>

    <form method="post" action="">
        <h3>Pemesanan Minuman</h3>
        <!-- Daftar menu minuman -->
        <label for="minuman">Pilih Minuman:</label>
        <select id="minuman" name="minuman">
            <option value="Es Ronde Anget">Es Ronde Anget</option>
            <option value="Jus Empedu">Jus Empedu</option>
			<option value="Sirup Antibiotik">Sirup Antibiotik</option>
            <!-- Tambahkan opsi minuman lainnya -->
        </select><br><br>

        <input type="submit" name="order" value="Pesan Minuman">
    </form>
	</section>
<footer>
     <p>&copy; Created by Priaidaman 2023 </p>
	</footer>
</body>
</html>

	
</body>
</html>