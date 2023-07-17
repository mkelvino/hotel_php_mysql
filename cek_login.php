<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="manager"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "manager";
		header("location:pelanggan.php");
 
	}else if($data['password']==$password){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:hal_user.php");

	}
	else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>