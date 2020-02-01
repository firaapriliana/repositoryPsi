<?php
include("config.php");
//include :untuk memasukkan file koneksi ke file proses
//agar tdk perlu menulis lagi source code connect ke dbnya

// ambil data dari formulir yang disimpan di variabel $_POST

if(isset($_POST['id']))
{
// Check jika formnya tersubmit setelah update, arahkan kembali kehomepage setelah update
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $sekolah = $_POST['sekolah_asal'];

    // update user data
	$update = mysqli_query($db,"UPDATE calon_siswa set id='$id',nama = '$nama',alamat='$alamat',jenis_kelamin='$jk,email='$email',sekolah='$sekolah' where id='$id'");

    // Redirect to homepage to display updated user in list
    header("Location: list-siswa.php");
}

?>

<html>
<head>  
    <title>Edit Data</title>
</head>

<body>

    <br/><br/>
	    <form action="update.php" method="POST">
	<!-isi form->
			id : <input type="text" name="nama"/>
            <br>Nama:  <input type="text" name="nama"  /></br>

           <br> Alamat:<input type="text" name="alamat"  /></br>
			
			<br>
            Jenis Kelamin:<input type="text" name="jenis_kelamin"  /></br>
			
            <br>email: <input type="text" name="email"  /></br>
          
            <br> Sekolah Asal: <input type="text" name="sekolah_asal"  /></br>

            <input type="submit" value="Simpan" name="simpan" />
	    <a href="list-siswa.php">Home</a>
    </form>
</body>
</html>