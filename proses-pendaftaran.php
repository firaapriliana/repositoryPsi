<?php
//SIMPAN :  menyimpan hasil inputan di form

include("config.php");
//include :untuk memasukkan file koneksi ke file proses
//agar tdk perlu menulis lagi source code connect ke dbnya

    // ambil data dari formulir yang disimpan di variabel $_POST
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $sekolah = $_POST['sekolah_asal'];
	
	if(empty($id)){
		echo("maaf id harus diisi");
	}
	elseif(empty($nama)){
		echo("maaf nama harus diisi");
	}
	elseif(empty($alamat)){
		echo("maaf alamat harus diisi");
	}
	elseif(empty($jk)){
		echo("maaf jenis kelamin harus diisi");
	}
	elseif(empty($email)){
		echo("maaf email harus diisi");
	}
	elseif(empty($sekolah)){
		echo("maaf sekolah harus diisi");
	}
	else{
	
    // query untuk mengirim data ke mysql
    $sql = "INSERT INTO calon_siswa (id,nama, alamat, jenis_kelamin, email, sekolah_asal) VALUE ('$id','$nama', '$alamat', '$jk', '$email', '$sekolah')";
    $query = mysqli_query($db, $sql);//my sql query : fungsi untuk menjalankan query

    // apakah data berhasil disimpan ?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php 
        header('Location: list-siswa.php');		
    } else {
        // kalau gagal 
        echo "gagal";
    }
	}
?>
<a href='list-siswa.php'></a>
