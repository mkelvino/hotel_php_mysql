<?php 
$koneksi = mysqli_connect("localhost","root","","user_level");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $koneksi->query("INSERT INTO user (nama,username,password,level) values ('$nama','$username','$password','user')");
    
    header('location:login.php');
}

if (isset($_POST['baru'])) {
    $id_hotel = $_POST['id_hotel'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $koneksi->query("INSERT INTO hotel (id_hotel,harga,status) values ('$id_hotel','$harga','$status')");

    header('location:pelanggan.php');
}

if (isset($_POST['edit'])) {
    $id_hotel = $_POST['id_hotel'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $koneksi->query("UPDATE hotel SET id_hotel='$id_hotel',harga='$harga',status='$status'WHERE id_hotel=$id_hotel");
    header("location:pelanggan.php");
}
 
if (isset($_GET['id'])) {
    $id =$_GET['id'];
    $koneksi->query("DELETE FROM user where id = '$id'");
    header("location:login.php");
} 
if (isset($_GET['id'])) {
    $id =$_GET['id'];
    $koneksi->query("DELETE FROM hotel where id = '$id'");
    header("location:pelanggan.php");
} 



// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>