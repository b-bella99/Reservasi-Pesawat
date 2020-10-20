<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";

  $connect = mysqli_connect($namaHost, $username, $password, $database);
$query=mysqli_query($connect, "update customer set
					nama='$_POST[nama]',alamat='$_POST[alamat]',
					 notelp='$_POST[notelp]', gender='$_POST[gender]'
					 where id_customer='$_POST[id_customer]'");
					
if($query)
{
	header("location:tampil_pelanggan.php");
}
else
{
	echo"Maaf data gagal di-edit, silahkan ";
	echo"<a href='tampil_pelanggan.php'> edit</a> kembali";
}
?>