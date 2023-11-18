<?php
session_start();

// Mengganti dengan informasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hotel1';

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_error()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Tangkap data dari formulir login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa data admin
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Memeriksa kata sandi
        if ($password == $admin["password"]) {
            // Autentikasi sukses, simpan informasi admin ke sesi
            $_SESSION['admin_id'] = $admin['id_admin'];
            $_SESSION['admin_username'] = $admin['username'];
            $_SESSION['admin_nama'] = $admin['nama'];

            // Redirect ke halaman admin setelah login sukses
            header('Location: ../admin/hotel.php'); // Sesuaikan dengan halaman admin yang sesuai
            exit();
        } else {
            // Password tidak cocok
            $_SESSION['login_error'] = '<p style="color:red">Username atau password salah</p>';
        }
    } else {
        // Admin tidak ditemukan
        $_SESSION['login_error'] = '<p style="color:red">Username atau password salah</p>';
    }
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Template Main CSS File -->
    <link href="guest.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<style>
    body{
        background-color: #151515;
    }
</style>
<body>
    <!-- Formulir login admin -->
    <section id="admin-login" class="py-5">
        <div class="containerAbout">
        <header>
        <nav class="navbar">
            <h1 class="logo"><a>HphP<span>.</span></a></h1>
            <ul>
                <li class="txthvr"><a href="guest.html" class="hovered">Home Page</a></li>
                <li class="txthvr"><a href="about.html" class="hovered">About</a></li>
                <li><a href="">    
                    <div class="dropdown">
                        <a class="dropbtn">Rooms</a>
                        <div class="dropdown-content">
                            <a href="normal.html">Normal</a>
                            <a href="couple.html">Couple</a>
                            <a href="sultan.html">Sultan</a>
                        </div>
                    </div></a></li>
                <li><a href="">
                    <div class="dropdown">
                        <a class="dropbtn">Contact Us</a>
                        <div class="dropdown-content">
                            <a href="https://wa.me/6288225027973">WhatsApp</a>
                            <a href="https://www.instagram.com/kelazberapa_/?img_index=1">Instagram</a>
                            <a href="mailto:gilangjati86@gmail.com">Email</a>
                        </div>
                    </div></a></li>
                    <li class="txthvr"><a href="aboutLogin.php" class="hovered" style="color: #ffc451;">Log In</a></li>
            </ul>
        </nav>
        </header>
        <img src="https://www.ahstatic.com/photos/5451_ho_00_p_1024x768.jpg" class="imgAbout" alt="">
        <div class="contentAbout">
        <p style="text-align: justify;">Located in the heart of Yogyakarta, hotel.php is a luxury accommodation in a colonial landmark from 1918. Hotel
            This 5-star offers a spa, fine dining restaurant and spacious rooms with free Wi-Fi. Hotel outdoor swimming pool
            This spacious hotel is open all year round.<br>Offering classic interiors with Javanese and European elements with intricate details, the rooms at
            The hotel has modern facilities such as flat-screen TV and air conditioning. Each room is equipped with a minibar and safe for
            your comfort. There is also a hot shower in the private bathroom.<br>hotel.php offers a well-equipped fitness center.
            The hotel also provides car rental services and free parking on site.<br>For a variety of sumptuous meals, The Paprika Restaurant
            serves Indonesian, Western and Chinese cuisine in an open courtyard setting. A variety of fine cocktails and wines are served at
            The Lobby Bar has a 1918 feel.<br>Popular points of interest near the hotel include Jalan Malioboro, Malioboro Mall,
            and Fort Vredeburg. hotel.php is a 5-minute drive from Tugu Train Station
            and 20 minutes drive from Adisucipto International Airport. Borobudur and Prambanan temples are a 1-hour drive from the hotel.
            <br>Couples liked the location best — they rated it 8.9 for a two-person trip.
        </p>
        </div>
          <div class="overlay1" id="overlay1">
            <div class="box">
            <h3 class="text-center"  style="color: #ffc451">LOGIN ADMIN</h3><br>
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['login_error']; ?>
                </div>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
            <form action="aboutLogin.php" method="POST">
            <table border="1" style="text-align: left;" style="border: 1px solid #151515;" class="inputan">
                <div class="form-group">
                    <tr>
                    <td for="id_admin" style="color: #fff">ID Admin</td>
                    <td><input type="number" class="form-control" id="id_admin" name="id_admin" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                    <td><label for="username" style="color: #fff">Username</label></td>
                    <td><input type="text" class="form-control" id="username" name="username" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                    <td><label for="password" style="color: #fff">Password</label></td>
                    <td><input type="password" class="form-control" id="password" name="password" required></td>
                    </tr>
                </div>
            </table>
            <input type="submit" class="colored-button1" value="Login">
            </form>
            <a href="about.html" id="hide-box">Cancel</a>
            </div>
          </div>
        </div>
    </section>
    <!-- Selesai formulir login admin -->

    <!-- ... Bagian konten lainnya ... -->
    <script>
        document.getElementById("hide-box").addEventListener("click", function() {
            document.getElementById("overlay1").style.display = "none";
        });
    </script>
</body>
</html>