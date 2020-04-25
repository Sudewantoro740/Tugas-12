<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
  	<li><a href="../kontak.php">Formulir</a></li>
  	<li style="float:right"><a class="active" href="index.php">Admin</a></li>
</ul>
<div class="header">
	<table class="table table-bordered table-dark">
  		<thead>
	    <tr>
			<th scope="col">No</th>
			<th scope="col">Formulir</th>
			<th scope="col">Cetak</th>
	    </tr>
	  	</thead>
	  	<tbody>
	    <tr>
	      	<th scope="row" rowspan="2">1</th>
	      	<td rowspan="2">Data Peserta</td>
	      	<td><a href="cetakexcel.php">Excel</a></td>
	    </tr>
	    <tr>
	    	<td><a href="cetakpdf.php">PDF</a></td>
	    </tr>
	</table>
	<br>
	<a href="../halutama.php">Kembali</a>
</div>
</body>
</html>