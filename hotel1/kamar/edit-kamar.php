<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            box-sizing: border-box;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }
        .container1 {
            width: 100%;
            min-height: 100vh;
            background-color: #151515;
            background-size: cover;
            background-position: center;
            padding: 10px 8%;
        }
        th,
        td {
            border: 1px solid #151515;
            padding: 8px;
        }
        .overlay {
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
        .colored-button {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #ffc451;
            color: #151515;
            padding: 9px 140px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .colored-button:hover {
            background-color: #ffcd6d;
        }
        #hide-box {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #fff;
            color: #151515;
            padding: 9px 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        #hide-box:hover {
            background-color: #ddd;
        }
        
 
        .logo {
            width: 180px;
            cursor: pointer;
            font-size: 30px;
            color: #fff;
        }

        .logo a span {
            color: #ffc451;
        }

        nav {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            width: 100%;
            text-align: right;
            padding-right: 60px;
        }

        nav ul li {
            display: inline-block;
            margin: 10px 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .btn {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border: 0;
            outline: 0;
            border-radius: 5px;
            background: red;
            color: #fff;
            font-weight: 500;
            cursor: pointer;
        }

        .btnking {
            color: #fff;
            border-radius: 4px;
            padding: 7px 25px 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;
            border: 2px solid #ffc451;
            cursor: pointer;
        }

        .btnking:hover {
            background: #ffbb38;
            color: #343a40;
        }

        .content {
            margin-top: 14%;
            color: #fff;
            max-width: 620px;
        }

        .content h1 {
            font-size: 70px;
            font-weight: 600;
            line-height: 85px;
            margin-bottom: 25px;
        }

        .content form {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 5px;
            padding: 10px;
            margin-top: 30px;
        }

        .content form input {
            border: 0;
            outline: 0;
            width: 100%;
            font-size: 16px;
            padding-left: 10px;
        }

        .content form .btn {
            font-size: 15px;
            padding: 10px 30px;
        }

        /* Style dasar dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Tombol dropdown */
        .dropbtn {
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Isi dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: left;
        }

        /* Tautan dalam dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Warna tautan saat dihover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Tampilkan dropdown saat tombol dihover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Mengatur ulang tampilan dropdown saat tidak dihover */
        .dropdown:hover .dropbtn {
            color: #ffc451;
        }

        .txthvr:hover .hovered {
            color: #ffc451;
        }

        .get-started-btn {
            color: #fff;
            border-radius: 4px;
            padding: 7px 25px 8px 25px;
            white-space: nowrap;
            transition: 0.3s;
            font-size: 14px;
            display: inline-block;
            border: 2px solid #ffc451;
        }

        .get-started-btn:hover {
            background: #ffbb38;
            color: #343a40;
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

        h2 {
            color: #fff;
        }
        
        .add-data-button {
            color: #151515;
            background-color: #ffc451;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 1px;
        }

        .add-data-button:hover {
            background-color: #ffcd6b;
            color: #151515;
        }

        #hide-box {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #fff;
            color: #151515;
            padding: 9px 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        #hide-box:hover {
            background-color: #ddd;
        }

        .colored-button {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #ffc451;
            color: #151515;
            padding: 9px 140px;
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

</style>
</head>

<div class="container1">
    <header>
            <nav class="navbar">
                <h1 class="logo"><a>HphP<span>.</span></a></h1>
                <ul>
                    <li class="txthvr"><a href="http://localhost/hotel1/hotel.php" class="hovered">Home Page</a></li>
                    <li class="txthvr"><a href="#" class="hovered">About</a></li>
                    <li><a href="">
                            <div class="dropdown">
                                <a style="color: #ffc451;" class="dropbtn">Databases</a>
                                <div class="dropdown-content">
                                    <a href="http://localhost/hotel1/kamar/kamar.php">Kamar</a>
                                    <a href="http://localhost/hotel1/tamu/tamu.php">Tamu</a>
                                    <a href="http://localhost/hotel1/karyawan/karyawan.php">Karyawan</a>
                                </div>
                            </div>
                        </a></li>
                    <li><a href="">
                            <div class="dropdown">
                                <a class="dropbtn">Contact Us</a>
                                <div class="dropdown-content">
                                    <a href="https://wa.me/6288225027973">WhatsApp</a>
                                    <a href="https://www.instagram.com/kelazberapa_/?img_index=1">Instagram</a>
                                    <a href="mailto:gilangjati86@gmail.com">Email</a>
                                </div>
                            </div>
                        </a></li>
                        <li class="txthvr"><a href="" class="hovered" id="show-box1">Log Out</a></li>
                </ul>
            </nav>
    </header>
    <div class="isi">
        <table border = "1" style="text-align: center;" >
            <tr>
                <td style="background-color: #ffc451" style="color: #151515;">ID Kamar</td>
                <td style="background-color: #ffc451" style="color: #151515;">Nomor Kamar</td>
                <td style="background-color: #ffc451" style="color: #151515;">Tipe Kamar</td>
                <td style="background-color: #ffc451" style="color: #151515;">Harga per Malam</td>
                <td style="background-color: #ffc451" style="color: #151515;">Keterangan</td>
                <td style="background-color: #ffc451" style="color: #151515;">Aksi</td>
            </tr>
            <p>.</p>
            <h2>Data Kamar Hotel</h2><br>
        </div>
            <?php
            include "koneksih.php";
            $data = mysqli_query($koneksi,"select * from kamar");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td style="color: #fff;"><?php echo $d['id_kamar']?></td>
                    <td style="color: #fff;"><?php echo $d['nomor_kamar']?></td>
                    <td style="color: #fff;"><?php echo $d['tipe_kamar']?></td>
                    <td style="color: #fff;"><?php echo $d['harga_per_malam']?></td>
                    <td style="color: #fff;"><?php echo $d['keterangan']?></td>
                    <td>
                        <a style="color: #ffc451;" href="hapus-kamar.php?id=<?php echo $d['id_kamar'];?>">Hapus</a>
                        <a style="color: #151515;">.</a>
                        <a style="color: #ffc451;" href="edit-kamar.php?id=<?php echo $d['id_kamar'];?>">Edit</a>
                    </td>
                </tr>
                <?php
            }
                ?>
        </table><br>
        <a href="#" id="show-box" class="add-data-button">Tambahkan Data</a>
        </div>

    <div class="overlay" id="overlay">
        <div class="box">
            <h3 style="color: #ffc451"> Edit Data Kamar </h3><br>
            <?php
            include 'koneksih.php';
            $id= $_GET['id'];
            $data = mysqli_query($koneksi, "select * from kamar where id_kamar='$id'");
            while($tampil= mysqli_fetch_array($data)){
            ?>
            <form method="post" action="edit-aksi-kamar.php">
            <table style="text-align: left;" style="border: 1px solid #151515;">
                <tr>
                    <td style="color: #fff">ID Kamar</td>
                    <td>
                        <input type="number" name="id_kamar" value="<?php echo $tampil['id_kamar']; ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td style="color: #fff">Nomor Kamar</td>
                    <td>
                    <input type="number" name="nomor_kamar" value="<?php echo $tampil['nomor_kamar']; ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td style="color: #fff">Tipe Kamar</td>
                    <td>
                    <input type="text" name="tipe_kamar" value="<?php echo $tampil['tipe_kamar']; ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td style="color: #fff">Harga per Malam</td>
                    <td>
                    <input type="text" name="harga_per_malam" value="<?php echo $tampil['harga_per_malam']; ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td style="color: #fff">Keterangan</td>
                    <td>
                    <input type="text" name="keterangan" value="<?php echo $tampil['keterangan']; ?>"></input>
                    </td>
                </tr>
            <table><br>
                <div>
                    <input type="submit" class="colored-button" value="Submit">
                </div>
            </form>
            <a href="kamar.php" id="hide-box">Cancel</a>
            <?php    
            }
            ?>
    </div>
        </div>
</div>