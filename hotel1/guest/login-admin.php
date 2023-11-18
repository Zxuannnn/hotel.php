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
    .overlay2 {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    align-items: center;
    justify-content: center;
    margin-left: 860px;
    margin-top: 170px;
    }
</style>
<body>
    <!-- Formulir login admin -->
    <section id="admin-login" class="py-5">
        <div class="container1">
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
                    <li class="txthvr"><a href="login-admin.php" class="hovered" style="color: #ffc451;">Log In</a></li>
            </ul>
        </nav>
    </header>
    <div class="overlay2" id="overlay2">
            <div class="box">
                <h3 style="color: #ffc451">Availability</h3><br>
                <form method="POST" action="">
                    <table border="1" style="text-align: left;" style="border: 1px solid #151515;" class="inputan">
                        <tr>
                            <td style="color: #fff">Normal Room : Kamar 3-10 Tersedia</td>
                        </tr>
                        <tr>
                            <td style="color: #fff">Couple Room : Kamar 1-10 Tersedia</td>
                        </tr>
                        <tr>
                            <td style="color: #fff">Sultan Room : Kamar 1-10 Tersedia</td>
                        </tr>
                    </table><br>
                    <div>
                        <a class="btn btnking" href="booking.php" style="text-decoration: none;">Booking Now</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="content">
            <h1>Welcome<br>to hotel<span style="color: #ffc451;">.</span>php</h1>
            <p>We look forward to welcoming you to provide an unforgettable experience at hotel<span style="color: #ffc451;">.</span>php. Order now to get our exclusive offers.</p>
            <form>
                <input type="text" placeholder="Country name">
                <button type="submit" class="btn">Search</button>
            </form>
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
            <form action="login-admin.php" method="POST">
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
            <a href="guest.html" id="hide-box">Cancel</a>
            </div>
          </div>
        </div>
    </section>
    <script>
        document.getElementById("hide-box").addEventListener("click", function() {
            document.getElementById("overlay1").style.display = "none";
        });
    </script>
</body>
</html>