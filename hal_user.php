<!DOCTYPE html>
<html>
<head>
	<title>Halaman user</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_user.css">
</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman User</h1>
 
	<p>Halo, unfortunately  swiss web knife is currently down, sorry :<</p>
    <p><?php echo $_SESSION['username']; ?>,kamu telah login sebagai <?php echo $_SESSION['level']; ?></p>.
    <br>
	<a href="logout.php">LOGOUT</a>
</br>
	<br/>
	<br/>
 
</body>
</html>