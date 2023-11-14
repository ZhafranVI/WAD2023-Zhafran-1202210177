<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            ?>

            <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Brand mobil</th>
                <th>warna mobil</th>
                <th>tipe mobil</th>
                <th>harga mobil</th>
                <th>Opsi</th>		
            </tr>
            <?php 
            include "connect.php";
            $query_mysql = mysqli_query($conn,"SELECT * FROM showroom_mobil")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_mobil']; ?></td>
                <td><?php echo $data['brand_mobil']; ?></td>
                <td><?php echo $data['warna_mobil']; ?></td>
                <td><?php echo $data['tipe_mobil']; ?></td>
                <td><?php echo $data['harga_mobil']; ?></td>
                <td>
                <a class="edit" href="form_update_mobil.php?id=<?php echo $data['id']; ?>">Edit</a> |
                <a class="hapus" href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>				
                </td>
            </tr>

            <?php } ?>
            </table>
        </div>
    </center>
</body>
</html>
