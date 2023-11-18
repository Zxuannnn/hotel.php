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
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> rooms.php</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="rooms.css" rel="stylesheet">
</head>
<style>
    .image-container {
    margin-top: 6%;
    position: relative;
    width: 600px;
    height: 400px;
    overflow: hidden;
  }

  .image-slider {
    display: flex;
    transition: transform 0.3s ease-in-out;
  }

  .image1 {
    width: 600px;
    height: 400px;
  }
  #prevButton,
  #nextButton {
    background-color: #ffbb38;
    color: #151515;
    padding: 5px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  #prevButton:hover,
  #nextButton:hover {
    background-color: #ffcd6d;
  }
  #prevButton {
    margin-right: 5px;
  }
  .overlay1 {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    align-items: center;
    justify-content: center;
    z-index: 999;
}
.box {
    background-color: #151515;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    text-align: center;
}
#hide-box {
    display: block;
    text-align: center;
    text-decoration: none;
    background-color: #fff;
    color: #151515;
    padding: 9px 60px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
}
#hide-box:hover {
    background-color: #ddd;
}        
.colored-button1 {
    display: block;
    text-align: center;
    text-decoration: none;
    background-color: #ffc451;
    color: #151515;
    padding: 9px 120px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
}
.colored-button:hover {
    background-color: #ffcd6d;
}
.inputan table tr {
    color: #151515;
}
table {
    width: 100%;
    border-collapse: collapse;
}

.isi table tr td {
    border: 1px solid #ffc451;
    padding: 8px;
}

.inputan th,
td {
    border: 1px solid #151515;
    padding: 8px;
}
</style>

<body>
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
                    <li class="txthvr"><a href="sultanLogin.php" class="hovered" style="color: #ffc451;">Log In</a></li>
            </ul>
        </nav>
    </header>

  <div class="flex">
  <div class="image-container">
    <div class="image-slider">
    <img class="image1" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/239429315.jpg?k=3ecb699b6fb5599aa306500d0f63728319555d8250ce6595e89da7f595bd3c63&o=" alt="Gambar 1">
      <img class="image1" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/239429287.jpg?k=4af2534e6aeb25a5278036a7dbad1a2f187fc1b62b29bc1e9f7108d7c4765bb2&o=" alt="Gambar 2">
      <img class="image1" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/31547062.jpg?k=2836ce1bfb745d050cdf9e102e70f274383716350513c5e17b416573ac2deddb&o=" alt="Gambar 3">
    </div>
  </div>
    <div class="contentAbout">
    <h2>Sultan Room (1.200.000,00 IDR per Malam)</h2><br>
    <p style="text-align: justify;">Luas kamar 60 m²
      Menampilkan pemandangan kota dari balkon pribadi, suite mewah ini memiliki TV LCD dan AC. Di dalam kamar, Anda dapat menikmati kamar mandi marmer yang dilengkapi dengan bilik rainshower. Sandal, jubah mandi, dan amenitas kamar mandi gratis disediakan untuk kenyamanan Anda. Tersedia layanan merapikan tempat tidur setiap hari. Suite ini memiliki ruang tamu terpisah dengan minibar, mesin espreso, dan sekeranjang buah gratis.
      Di kamar mandi pribadi Anda:
      Sama seperti normal room + Toilet Tamu.
      Pemandangan:
      Balkon,
      Pemandangan kolam renang,
      Pemandangan landmark, dan
      Pemandangan kota.
      Fasilitas kamar: ​
      Meja kerja,
      Mesin kopi,
      Brankas,
      Meja makan,
      TV layar datar,
      Layanan bangun tidur,
      Sofa,
      Jam alarm,
      Rak pengering baju,
      Handuk,
      Area tempat duduk,
      Pembuat teh/kopi,
      TV,
      Lemari es,
      Seprai,
      Minibar,
      Lantai keramik/marmer,
      Lantai berkarpet,
      Ketel listrik,
      Telepon,
      Mesin pengering baju,
      Lemari,
      Alat bersih-bersih,
      Kedap suara,
      TV satelit,
      AC,
      Ruang makan, dan
      Papan Jemur Baju.
      Aturan rokok: ​Bebas rokok.
    </p>
    </div>
  </div><br>

  <button id="prevButton">Back</button>
  <button id="nextButton">Next</button>

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
    <form action="sultanLogin.php" method="POST">
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
    <a href="sultan.html" id="hide-box">Cancel</a>
    </div>
  </div>
</div>

<script>
    const slider = document.querySelector('.image-slider');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentSlide = 0;

    nextButton.addEventListener('click', () => {
      currentSlide = (currentSlide + 1) % 3;
      updateSliderPosition();
    });

    prevButton.addEventListener('click', () => {
      currentSlide = (currentSlide - 1 + 3) % 3;
      updateSliderPosition();
    });

    function updateSliderPosition() {
      slider.style.transform = `translateX(-${currentSlide * 600}px)`;
    }
  </script>
</body>
</html>