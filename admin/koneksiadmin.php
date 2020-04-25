<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudewantoro";

$koneksi = mysqli_connect($servername,$username,$password,$dbname) or die (mysqli_error());
mysqli_select_db($koneksi,$dbname) or die (mysqli_error());
?>