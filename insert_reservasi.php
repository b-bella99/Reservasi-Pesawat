<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "insert into reservasi values
					('$_POST[id_reservasi]','$_POST[tanggal]','$_POST[id_customer]',
					'$_POST[nmr_kursi]','$_POST[id_rute]')");
					
if($query)
{
	header("location:tampil_reservasi.php");
}
else
{
	echo"Maaf data gagal dimasukkan, silahkan ";
	echo"<a href='form_insert_reservasi.php'> masukkan</a> kembali";
}
?>