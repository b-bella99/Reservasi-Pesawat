<?php
	include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from admin where username ='$username' and password ='$password'";
	$result = mysqli_query($connect, $query);
	$cek = mysqli_num_rows($result);

	if($cek){
		echo header("location:home.php"); ?>
		
	<?php
	}else{
		echo "Anda gagal login. Silahkan ";?>
		<a href="index.php">Login Kembali</a>
	<?php
		echo mysqli_error($connect);
	}
?>