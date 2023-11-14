<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "modul3";
$dbpass = "";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}

// 
?>