<?php include("config.php");	
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql); 
		//my sql query : fungsi untuk menjalankan query
		//query untuk mengambil data siswa pada tabel calon_siswa.
		
		// mysqli_fetch_array()  : untuk mengeluarkan data dr tabel database
		//dan  disimpan dalam variabel $siswa u/ ditampilkan?>
<!- Menampilkan Data dari MySQL->
<html>
<body>  
	<!-OUTPUT : MENAMPILKAN YG SUDAH TERSIMPAN->
    <table border="3"> <!-BORDER : GARIS TEPI->
        
		<!-isi tabel->
            <td>No</td> <!-td : membuat tulisan rata kiri pada tabel->
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Email</td>
            <td>Sekolah Asal</td> 		
			

        
		<?php
		while ($row = mysqli_fetch_array($query)){
		echo ("<tr align=center><td>$row[0]</td>");
		echo ("<td> $row[1]</td>");
		echo ("<td> $row[2]</td>");
		echo ("<td> $row[3]</td>");
		echo ("<td> $row[4]</td>");
		echo ("<td> $row[5]</td>");
		echo ("<td><a href ='editt.php?nama=$row[nama]'>Edit</a> </td></tr>");
	}
		?>
   
    </table>

    </body>
</html>
