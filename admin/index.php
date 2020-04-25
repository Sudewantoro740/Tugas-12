<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
			body {
				background-color: #28edbf;
			}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333;
			}

			li {
			  	float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
			  	background-color: #111;
			}
			.active {
			  	background-color: #2894ed;
			}
			.header {
				padding: 80px;
				text-align: center;
				display: flex;
				justify-content: center;
				height: 60vh;
				flex-direction: column;
				align-items: center;
			}
			.header h1 {
				display: block;
	  			font-size: 40px;
			}
	</style>
</head>
<body>
<ul>
	<li><a href="../halutama.php">Halaman Utama</a></li>
  	<li><a href="../formpeserta.php">Formulir</a></li>
  	<li style="float:right"><a class="active" href="index.php">Admin</a></li>
</ul>
<div class="header">
<h1>Login Dulu Bosku</h1>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Username dan Password Salah!!!";
		}
	}
?>
	<form action="login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>