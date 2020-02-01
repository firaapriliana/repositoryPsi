<?php
//menghubungkan PHP dengan MySQL

$server = "localhost";//server MySQL
$user = "root";//username MySQL
$password = "";//Password MySQL
$nama_database = "pendaftaran_siswa"; //nama database

// mysqli_connect() : fungsi u/menghubungkan  script php  ke mysql
//dengan parameter alamat server, user, password, dan nama database.
$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db) //jika koneksi gagal

 {echo "koneksi gagal";
 }
 else
 {
 echo "koneksi berhasil";
 echo "<br>";
 }      
 
?>
