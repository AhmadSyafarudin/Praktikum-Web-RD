<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webinar Free</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <p id="title">Webinar Free</p>
        <a href="#form" id="daftar"><b>Daftar</b></a>
    </header>

    <div class="home">
        <div class="welcome">
            <h2>SELAMAT DATANG DI WEBINAR FREE</h2>
            <hr>
            <p>Temukan Berbagai Webinar Menarik yang Dapat Anda Ikuti Secara <span style="color: red; font-style: italic;"><b>Gratis!</b></span></p>
            <br>
            <br>
            <br>
            <a href="#form" id="gogo">Daftar Sekarang</a>
        </div>
        <div class="webinar">
            <h4>Webinar yang Akan Datang</h4>
            <hr>
            <br>
            <img src="webinar.jpeg" alt="Webinar IKAMM Pringsewu">
        </div>
    </div>

    <div class="daftar" id="form">
        <div class="pdftn">
            <h4>Form Pendaftaran</h4>
            <hr>
        </div>
        <br>
        <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=="sukses"){
                    ?>
                    <h4 style="background-color: teal; color: white; text-align :center; padding : 5px; width : 105%;">Pendaftaran Anda Telah Berhasil <br> Nantikan Info Selanjutnya via Email dan WA</h4>						
                    <?php
                }
                else if($_GET['alert']=='ekstensi'){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ekstensi File Tidak Didukung</h3>			
                    <?php
                }elseif($_GET['alert']=="ukuran"){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ukuran File Terlalu Besar</h3>					
                    <?php
                }
            }
        ?>
        <br>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <label for="username"><strong>Nama</strong></label>
            <input type="text" id="username" name="nama" placeholder="Masukkan Nama Anda" required="required">
            <label for="nim"><strong>Nomor Induk Mahasiswa</strong></label>
            <input type="number" id="nim" name="nim" placeholder="Masukkan NIM Anda" required="required">
            <label for="from"><strong>Instansi</strong></label>
            <input type="text" id="from" name="instansi" placeholder="Asal Instansi" required="required"> 
            <label for="mail"><strong>Email</strong></label>
            <input type="email" id="mail" name="email" placeholder="Email" required="required">
            <label for="contact"><strong>Nomor Whatsapp</strong></label>
            <input type="number" id="contact" name="kontak" placeholder="Masukkan Nomor WA Aktif" required="required">
            <label for="foto"><strong>Upload Bukti Share Info Webinar</strong></label>
            <p style="font-size: 11pt; color: teal;">*format .jpg / .png / .jpeg (maks. 1mb)</p>
            <input type="file" name="foto" id="foto" required="required"> 
            <input type="submit" value="Daftar">
        </form>
    </div>
    
    <footer>
        <p><i>Pemrograman Web (RB) Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>

