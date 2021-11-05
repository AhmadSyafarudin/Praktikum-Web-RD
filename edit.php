<?php
 include "koneksi.php";
 $nim = $_GET["nim"];
 $sql=mysqli_query($kon, "SELECT * FROM mahasiswa WHERE nim='$nim'");
 $hasil=mysqli_fetch_array($sql);
?>
    <form method="POST" id="edit">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="nim" id="nim" required="" value="<?php echo $hasil['nim']; ?>" />
                    <input type="text" name="nama" id="nama" required="" value="<?php echo $hasil['nama']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi" id="prodi" required="">
                        <option value="IF" <?php if($hasil['prodi']=="IF" ) echo "selected"; ?>>Teknik Informatika</option>
                        <option value="EL" <?php if($hasil['prodi']=="EL" ) echo "selected"; ?>>Teknik Elektro</option>
                        <option value="SI" <?php if($hasil['prodi']=="SI" ) echo "selected"; ?>>Teknik Sipil</option>
                        <option value="TG" <?php if($hasil['prodi']=="TG" ) echo "selected"; ?>>Teknik Geofisika</option>
                        <option value="MA" <?php if($hasil['prodi']=="MA" ) echo "selected"; ?>>Matematika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                </td>
            </tr>
        </table>
    </form>