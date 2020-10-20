<?php
$namaHost = "localhost";
  $username = "root";
  $password = "";
  $database = "reservasi_pesawat";
    $connect = mysqli_connect($namaHost, $username, $password, $database);

$query=mysqli_query($connect, "insert into customer values
					('$_POST[id_customer]','$_POST[nama]','$_POST[alamat]',
					'$_POST[notelp]','$_POST[gender]')");
					
if($query)
{
	header("location:tampil_pelanggan.php");
}
else
{
	echo"Maaf data gagal dimasukkan, silahkan ";
	echo"<a href='form_insert_pelanggan.php'> masukkan</a> kembali";
}
?>