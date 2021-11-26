<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Peserta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Peserta Webinar</h1>
    </header>

    <div>
        <table> 
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Email</th>
                <th>Whatsapp</th>
                <th>Screenshots</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "koneksi.php";
                $query = mysqli_query($kon, "SELECT * FROM webinar");

                
                $no = 1;

                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['instansi']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['wa']; ?></td>
                        <td><img src="foto/<?php echo $data['foto'] ?>" width="200px" height="300px"></td>
                        <td>
                            <a id="Edit"  href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a>
                            <br>
                            <br>
                            <a id="Delete" href="hapus.php?nim=<?php echo $data['nim']; ?>" onclick="return confirm('Yakin ingin Hapus?')">Delete
                        </td>
                    </tr>
                    
                    <?php
                    $no++;
                }
            ?>
        </table>
    </div>

    <footer>
        <p><i>Pemrograman Web (RB) Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>

