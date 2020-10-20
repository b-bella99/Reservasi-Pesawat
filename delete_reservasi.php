<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "delete from reservasi where id_reservasi='$_GET[id]'");
					
if($query)
{
	header("location:tampil_reservasi.php");
}
else
{
	echo"Maaf data gagal dihapus, silahkan ";
	echo"<a href='tampil_reservasi.php'> hapus</a> kembali";
}
?>