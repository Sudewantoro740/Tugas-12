<?php 
session_start();

include 'koneksiadmin.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * from admin where username='$username' and password='$password'";
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:cetak.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>