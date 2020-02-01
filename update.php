<?php
include("config.php");
//include :untuk memasukkan file koneksi ke file proses
//agar tdk perlu menulis lagi source code connect ke dbnya
// ambil data dari formulir yang disimpan di variabel $_POST
	
	$id =$_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $sekolah = $_POST['sekolah_asal'];
	
$update = "UPDATE calon_siswa set id= '$id',nama ='$nama',alamat='$alamat',jenis_kelamin='$jk,email='$email',sekolah='$sekolah' where id='$id'");
mysqli_query($db,$update);
header('Location: list-siswa.php?');		
?>
