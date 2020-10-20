<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";
  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "insert into rute values
					('$_POST[id_rute]','$_POST[rute_dari]','$_POST[rute_ke]',
					'$_POST[jam_berangkat]','$_POST[jam_tiba]','$_POST[harga]')");
					
if($query)
{
	header("location:tampil_rute.php");
}
else
{
	echo"Maaf data gagal dimasukkan, silahkan ";
	echo"<a href='form_insert_rute.php'> masukkan</a> kembali";
}
?>