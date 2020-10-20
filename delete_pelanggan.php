<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "delete from customer where id_customer='$_GET[id]'");
					
if($query)
{
	header("location:tampil_pelanggan.php");
}
else
{
	echo"Maaf data gagal dihapus, silahkan ";
	echo"<a href='tampil_pelanggan.php'> hapus</a> kembali";
}
?>