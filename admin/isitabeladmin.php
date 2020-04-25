<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudewantoro";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}
$sql = "INSERT INTO admin (username, password) VALUES ('admin','1234')";

if (mysqli_query($conn, $sql)) {
	echo "New Record Created Successfully";
} else {
	echo "Error: ".$sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>