<?php
 include "koneksi.php";
 session_start();


    $nim = $_GET["nim"];

 $sql=mysqli_query($kon, "SELECT * FROM webinar WHERE nim='$nim'");
 $hasil=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Peserta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Edit Data Peserta</h1>
    </header>

    <div class="daftar" id="form">
        <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=='ekstensi'){
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
        <form action="ubah.php" method="POST" enctype="multipart/form-data">
            <label for="username"><strong>Nama</strong></label>
            <input type="text" id="username" name="nama" placeholder="Masukkan Nama Anda" required="required" value="<?php echo $hasil['nama']; ?>">
            <input type="hidden" name="nim" id="nim" required="" value="<?php echo $hasil['nim']; ?>" />
            <label for="from"><strong>Instansi</strong></label>
            <input type="text" id="from" name="instansi" placeholder="Asal Instansi" required="required" value="<?php echo $hasil['instansi']; ?>"> 
            <label for="mail"><strong>Email</strong></label>
            <input type="email" id="mail" name="email" placeholder="Email" required="required" value="<?php echo $hasil['email']; ?>">
            <label for="contact"><strong>Nomor Whatsapp</strong></label>
            <input type="number" id="contact" name="kontak" placeholder="Masukkan Nomor WA Aktif" required="required" value="<?php echo $hasil['wa']; ?>">
            <label for="foto"><strong>Upload Bukti Share Info Webinar</strong></label>
            <p style="font-size: 11pt; color: teal;">*format .jpg / .png / .jpeg (maks. 1mb)</p>
            <input type="file" name="foto" id="foto" required ="required"> 
            <input type="submit" value="Ubah">
        </form>
    </div>
    
    <footer>
        <p><i>Pemrograman Web (RB) Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>
