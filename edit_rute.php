<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "update rute set
					rute_dari='$_POST[rute_dari]',rute_ke='$_POST[rute_ke]',
					jam_berangkat='$_POST[jam_berangkat]',jam_tiba='$_POST[jam_tiba]',
					harga='$_POST[harga]' where id_rute='$_POST[id_rute]'");
					
if($query)
{
	header("location:tampil_rute.php");
}
else
{
	echo"Maaf data gagal di-edit, silahkan ";
	echo"<a href='tampil_rute.php'> edit</a> kembali";
}
?>