<html>
<!-FORM PENDAFTARAN, untuk menambahkan Data ke MySQL->
<body>
	<!-judul->
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

	<!-Atribut action digunakan untuk menentukan file php mana yang akan
	memproses data inputan. 
	POST method :  metode pengiriman data ke file action.->
	
    <form action="proses-pendaftaran.php" method="POST">
	<!-isi form->
			Id:  <input type="text" name="id"  /></br>
            <br>Nama:  <input type="text" name="nama"  /></br>

           <br> Alamat:<input type="text" name="alamat"  /></br>
			
			<br>
            Jenis Kelamin:<input type="text" name="jenis_kelamin"  /></br>
			
            <br>email: <input type="text" name="email"  /></br>
          
            <br> Sekolah Asal: <input type="text" name="sekolah_asal"  /></br>

            <input type="submit" value="Daftar" name="daftar" />
	</form>

    </body>
</html>
