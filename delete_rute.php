<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "delete from rute where id_rute='$_GET[id]'");
					
if($query)
{
	header("location:tampil_rute.php");
}
else
{
	echo"Maaf data gagal dihapus, silahkan ";
	echo"<a href='tampil_rute.php'> hapus</a> kembali";
}
?>