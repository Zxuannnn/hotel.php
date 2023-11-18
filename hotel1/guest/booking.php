<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>hotel.php</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS File -->
    <link href="guest.css" rel="stylesheet">
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
    select {
        width: 116px;
    }
.overlay3 {
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
            padding: 9px 153px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .colored-button:hover {
            background-color: #ffcd6d;
        }
        .hide-box1 {
    display: block;
    width:358px ;
    text-align: center;
    text-decoration: none;
    background-color: #fff;
    color: #151515;
    padding: 9px 150px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
}
.hide-box1:hover {
    background-color: #ddd;
} 
</style>
<body>
<div class="container1">
    <header>
        <nav class="navbar">
            <h1 class="logo"><a>HphP<span>.</span></a></h1>
            <ul>
                <li class="txthvr"><a style="color: #ffc451;" href="guest.html" class="hovered">Home Page</a></li>
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
                    <li class="txthvr"><a href="login-admin.php" class="hovered">Log In</a></li>
            </ul>
        </nav>
    </header>
        <div class="content">
            <h1>Welcome<br>to hotel<span style="color: #ffc451;">.</span>php</h1>
            <p>We look forward to welcoming you to provide an unforgettable experience at hotel<span style="color: #ffc451;">.</span>php. Order now to get our exclusive offers.</p>
            <form>
                <input type="text" placeholder="Country name">
                <button type="submit" class="btn">Search</button>
            </form>
        </div>

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

        <div class="overlay3" id="overlay3">
        <div class="box">
        <h3 style="color: #ffc451">Data Tamu</h3><br>
<form method="POST" action="input-aksi-tamu.php" style="text-align: left;" style="border: 1px solid #151515;" class="inputan">
    <table>
        <tr>
            <td style="color: #fff">ID Tamu</td>
            <td><input type="number" name="idtmu"></td>
        </tr>
        <tr>
            <td style="color: #fff">Nama</td>
            <td><input type="text" name="idnma"></td>
        </tr>
        <tr>
        <td style="color: #fff">NIK</td>
            <td><input type="number" name="nik"></td>
        </tr>
        <tr>
        <td style="color: #fff">Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
        <td style="color: #fff">Gender</td>
            <td><select name="gender" style="width: 100%;">
                    <option>L</option>
                    <option>P</option>
                </select>
            </td>
        </tr>
        <td style="color: #fff">Status Pernikahan</td>
            <td><input type="text" name="sts"></td>
        </tr>
        <tr>
            <td style="color: #fff">Nomor Telepon</td>
            <td><input type="text" name="NoTelp"></td>
        </tr>
        <tr>
            <td style="color: #fff">Nomor Kamar</td>
            <td><input type="number" name="nokmr"></td>
        </tr>        
        <tr>
            <td style="color: #fff">Jumlah Tamu di Kamar</td>
            <td><input type="number" name="jmlh"></td>
        </tr>  
        <tr>
            <td style="color: #fff">Check In</td>
            <td><input type="date" name="cin" style="width: 100%;"></td>
        </tr>        
        <tr>
            <td style="color: #fff">Check Out</td>
            <td><input type="date" name="cot" style="width: 100%;"></td>
        </tr>
    </table>
        <div>
            <input type="submit" class="colored-button" value="Submit">
            <a href="guest.html" class="hide-box1">Cancel</a>
        </div>
    </form>
        </div>
    </div>
</div>
</body>
</html>