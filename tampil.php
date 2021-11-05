<style>
    td, th{
        padding: 5px;
        text-align: center;
    }
</style>

<table border="2px solid black" style="border-spacing: 0px;">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php
        include "koneksi.php";
        $hasil = mysqli_query($kon, "SELECT * from mahasiswa ORDER BY nim ASC");
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) :
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td>
            <button id="EditButton" value="<?php echo $data['nim']; ?>">Edit</button>
            <button id="DeleteButton" value="<?php echo $data['nim']; ?>">Delete</button>
        </td>
    </tr>
    <?php endwhile; ?>
</table>