<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin.php</title>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="hotel.css">
</head>
<style>
    body {
    margin: 0;
    padding: 0;
}
.containerAdmin {
        width: 100%;
        min-height: 100vh;
        padding: 10px 8%;
    }
.video-background {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
}

#video-background {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
<body>
    <div class="video-background">
        <video autoplay muted loop id="video-background">
            <source src="Hackerfix.mp4" type="video/mp4">
            <!-- Anda dapat menambahkan sumber video tambahan di sini untuk format lain -->
        </video>
    </div>
    <div class="containerAdmin">
    <header>
        <nav class="navbar">
            <h1 class="logo"><a>HphP<span>.</span></a></h1>
            <ul>
                <li class="txthvr"><a style="color: #ffc451;" href="http://localhost/hotel1/admin/hotel.php" class="hovered">Home Page</a></li>
                <li class="txthvr"><a href="http://localhost/hotel1/admin/about.php" class="hovered">About</a></li>
                <li><a href="">    
                    <div class="dropdown">
                        <a class="dropbtn">Databases</a>
                        <div class="dropdown-content">
                            <a href="http://localhost/hotel1/kamar/kamar.php">Kamar</a>
                            <a href="http://localhost/hotel1/tamu/tamu.php">Tamu</a>
                            <a href="http://localhost/hotel1/karyawan/karyawan.php">Karyawan</a>
                            <a href="http://localhost/hotel1/reservasi/reservasi.php">Reservasi</a>
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
                    <li class="txthvr"><a href="" class="hovered" id="show-box1">Log Out</a></li>
            </ul>
        </nav>
    </header>

        <div class="content">
            <h1>Welcome<br>Admin<span style="color: #ffc451;">.</span>php</h1>
            <p>We look forward to welcoming you to provide an unforgettable experience at hotel<span style="color: #ffc451;">.</span>php. Order now to get our exclusive offers.</p>
            <form>
                <input type="text" placeholder="Country name">
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
</div>
</body>
</html>
