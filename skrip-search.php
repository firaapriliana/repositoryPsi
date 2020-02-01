<?php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"pendaftaran_siswa");
$hasil=mysqli_query($conn,"select * from calon_siswa where  $kolom like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);

if($jumlah!=0){
echo "<center> FOUND : $jumlah </center>";
}else {
  echo "<center>No Data Entry</center>";
}
echo "<br>";

while($baris=mysqli_fetch_array($hasil))
{
echo "id : ";
echo $baris[0];
echo "<br>";
echo "nama : ";
echo $baris[1];
echo "<br>";
echo "alamat:";
echo $baris[2];
echo "<br>";
echo "jenis_kelamin:";
echo $baris[3];
echo "<br>";
echo "email:";
echo $baris[4];
echo "<br>";
echo "sekolah_asal:";
echo $baris[5];
}
?>