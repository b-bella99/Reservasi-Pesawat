<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "update reservasi set
					tanggal='$_POST[tanggal]',id_customer='$_POST[id_customer]',
					nmr_kursi='$_POST[nmr_kursi]',id_rute='$_POST[id_rute]' 
					where id_reservasi='$_POST[id_reservasi]'");
					
if($query)
{
	header("location:tampil_reservasi.php");
}
else
{
	echo"Maaf data gagal di-edit, silahkan ";
	echo"<a href='tampil_reservasi.php'> edit</a> kembali";
}
?>