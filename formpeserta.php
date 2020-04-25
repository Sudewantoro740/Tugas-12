<!DOCTYPE html>
<html>
<head>
	<title>Formulir Peserta Didik</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.warning {color: #FF0000;}
		body {
			background-color: #28edbf;
	</style>
</head>
<body>
<?php
$error_nama = "";
$error_jkel = "";
$error_nisn = "";
$error_nik = "";
$error_tlahir = "";
$error_tgllahir = "";
$error_noakta = "";
$error_agama = "";
$error_kwn = "";
$error_bkhusus = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_nmdusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kdpos = "";
$error_lintang = "";
$error_bujur = "";
$error_ttinggal = "";
$error_transportasi = "";
$error_nokks = "";
$error_anakke = "";
$error_kps = "";
$error_nokps = "";

$nama = "";
$jkel = "";
$nisn = "";
$nik = "";
$tlahir = "";
$tgllahir = "";
$noakta = "";
$agama = "";
$kwn = "";
$bkhusus = "";
$alamat = "";
$rt = "";
$rw = "";
$nmdusun = "";
$kelurahan = "";
$kecamatan = "";
$kdpos = "";
$lintang = "";
$bujur = "";
$ttinggal = "";
$transportasi = "";
$nokks = "";
$anakke = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["nama"])) {
		$error_nama = "Nama Tidak Boleh Kosong";
	}
	else {
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
			$error_nama = "Inputan Hanya Boleh Huruf dan Spasi";
		}
	}

	if (empty($_POST["jkel"])) {
    	$error_jkel = "Jenis Kelamin Pilih Salah Satu";
  	} 
  	else {
    	$jkel = cek_input($_POST["jkel"]);
 	}

 	if (empty($_POST["nisn"])) {
		$error_nisn = "NISN Tidak Boleh Kosong";
	}
	else {
		$nisn = cek_input($_POST["nisn"]);
		if (!is_numeric($nisn)) {
			$error_nisn = 'NISN Hanya Boleh Angka';
		}
	}

	if (empty($_POST["nik"])) {
		$error_nik = "NIK Tidak Boleh Kosong";
	}
	else {
		$nik = cek_input($_POST["nik"]);
		if (!is_numeric($nik)) {
			$error_nik = 'NIK Hanya Boleh Angka';
		}
	}

	if (empty($_POST["tlahir"])) {
    	$error_tlahir = "Tempat Lahir Tidak Boleh Kosong";
  	} 
  	else {
    	$tlahir = cek_input($_POST["tlahir"]);
 	}

 	if (empty($_POST["tgllahir"])) {
		$error_tgllahir = "Tanggal Lahir Tidak Boleh Kosong";
	}
	else {
		$tgllahir = cek_input($_POST["tgllahir"]);
		if (!is_numeric($tgllahir)) {
			$error_tgllahir = 'Tanggal Lahir Hanya Boleh Angka';
		}
	}

	if (empty($_POST["noakta"])) {
		$error_noakta = "Nomor Akta Lahir Tidak Boleh Kosong";
	}
	else {
		$noakta = cek_input($_POST["tlahir"]);
	}

	if($_POST) {
		if(isset($_POST['agama'])) {
			if($_POST['agama'] == 'kosong') {
				$error_agama = 'Agama Pilih Salah Satu';
			}
			else {
				$agama = cek_input($_POST["agama"]);
			}
		}
	}

	if (empty($_POST["kwn"])) {
    	$error_kwn = "Kewarganegaraan Tidak Boleh Kosong";
  	} 
  	else {
    	$kwn = cek_input($_POST["kwn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kwn)) {
			$error_kwn = "Inputan Hanya Boleh Huruf";
		}
	}

 	if($_POST) {
		if(isset($_POST['bkhusus'])) {
			if($_POST['bkhusus'] == 'kosong') {
				$error_bkhusus = "Berkebutuhan Khusus Pilih Salah Satu";
			}
			else {
				$bkhusus = cek_input($_POST["bkhusus"]);
			}
		}
	}

	if (empty($_POST["alamat"])) {
    	$error_alamat = "Alamat Tidak Boleh Kosong";
  	} 
  	else {
    	$alamat = cek_input($_POST["alamat"]);
 	}

 	if (empty($_POST["rt"])) {
		$error_rt = "RT Tidak Boleh Kosong";
	}
	else {
		$rt = cek_input($_POST["rt"]);
		if (!is_numeric($rt)) {
			$error_rt = 'RT Hanya Boleh Angka';
		}
	}

	if (empty($_POST["rw"])) {
		$error_rw = "RW Tidak Boleh Kosong";
	}
	else {
		$rw = cek_input($_POST["rw"]);
		if (!is_numeric($rw)) {
			$error_rw = 'RW Hanya Boleh Angka';
		}
	}

	if (empty($_POST["nmdusun"])) {
    	$error_nmdusun = "Nama Dusun Tidak Boleh Kosong";
  	} 
  	else {
    	$nmdusun = cek_input($_POST["nmdusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nmdusun)) {
			$error_nmdusun = "Inputan Hanya Boleh Huruf";
		}
	}

	if (empty($_POST["kelurahan"])) {
    	$error_kelurahan = "Kelurahan Tidak Boleh Kosong";
  	} 
  	else {
    	$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan)) {
			$error_kelurahan = "Inputan Hanya Boleh Huruf";
		}
	}

	if (empty($_POST["kecamatan"])) {
    	$error_kecamatan = "Kecamatan Tidak Boleh Kosong";
  	} 
  	else {
    	$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan)) {
			$error_kecamatan = "Inputan Hanya Boleh Huruf";
		}
	}

	if (empty($_POST["kdpos"])) {
		$error_kdpos = "Kode Pos Tidak Boleh Kosong";
	}
	else {
		$kdpos = cek_input($_POST["kdpos"]);
		if (!is_numeric($kdpos)) {
			$error_kdpos = 'Kode Pos Hanya Boleh Angka';
		}
	}

	if (empty($_POST["lintang"])) {
		$error_lintang = "Lintang Tidak Boleh Kosong";
	}
	else {
		$lintang = cek_input($_POST["lintang"]);
		if (!is_numeric($lintang)) {
			$error_lintang = 'Lintang Hanya Boleh Angka';
		}
	}

	if (empty($_POST["bujur"])) {
		$error_bujur = "Bujur Tidak Boleh Kosong";
	}
	else {
		$bujur = cek_input($_POST["bujur"]);
		if (!is_numeric($bujur)) {
			$error_bujur = 'Bujur Hanya Boleh Angka';
		}
	}

	if($_POST) {
		if(isset($_POST['ttinggal'])) {
			if($_POST['ttinggal'] == 'kosong') {
				$error_ttinggal = 'Tempat Tinggal Pilih Salah Satu';
			}
			else {
				$ttinggal = cek_input($_POST["ttinggal"]);
			}
		}
	}

	if($_POST) {
		if(isset($_POST['transportasi'])) {
			if($_POST['transportasi'] == 'kosong') {
				$error_transportasi = 'Transportasi Khusus Pilih Salah Satu';
			}
			else {
				$transportasi = cek_input($_POST["transportasi"]);
			}
		}
	}

	if (empty($_POST["nokks"])) {
		$error_nokks = "Nomor KKS Tidak Boleh Kosong";
	}
	else {
		$nokks = cek_input($_POST["nokks"]);
		if (!is_numeric($nokks)) {
			$error_nokks = 'Nomor KKS Hanya Boleh Angka';
		}
	}

	if (empty($_POST["anakke"])) {
		$error_anakke = "Anak Ke-berapa Tidak Boleh Kosong";
	}
	else {
		$anakke = cek_input($_POST["anakke"]);
		if (!is_numeric($anakke)) {
			$error_anakke = 'Anak Ke-berapa Hanya Boleh Angka';
		}
	}

	if (empty($_POST["kps"])) {
    	$error_kps = "KPS Pilih Salah Satu";
  	} 
  	else {
    	$kps = cek_input($_POST["kps"]);
 	}

$host="localhost";
$username="root";
$password="";
$namadb ="sudewantoro";
try {
$conn = mysqli_connect($host, $username, $password, $namadb) or die("Koneksi gagal dibangun");
$sql = "INSERT INTO `formulir`(`nama`,`jkel`,`nisn`,`nik`,`tlahir`,`tgllahir`,`noakta`,`agama`,`kwn`,`bkhusus`,`alamat`,`rt`,`rw`,`nmdusun`,`kelurahan`,`kecamatan`,`kdpos`,`lintang`,`bujur`,`ttinggal`,`transportasi`,`nokks`,`anakke`,`kps`,`nokps`)VALUES ('$nama','$jkel','$nisn','$nik','$tlahir','$tgllahir','$noakta','$agama','$kwn','$bkhusus','$alamat','$rt','$rw','$nmdusun','$kelurahan','$kecamatan','$kdpos','$lintang','$bujur','$ttinggal','$transportasi','$nokks','$anakke','$kps','$nokps')";
mysqli_query($conn,$sql);
mysqli_close($conn);	
} catch (Exception $e) {
echo $e;
}
header("location:formpeserta.php");
	
}

function cek_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;	
}
?>

<div class="container">
<div class="row">
<div class="col">
	<div class="card-header">
		Formulir Peserta Didik
	</div>
	<div class="card-body">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group row">    
			<label for="nama" class="col-sm-4 col-form-label"> Nama </label>
			<div class="col-sm-8">
			<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="Nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama;?></span>
			</div>
		</div>

		<div class="form-group row">  
			<label for="jkel" class="col-sm-4 col-form-label"> Jenis Kelamin </label>  
			<div class="col-sm-8">
				<label class="radio <?php echo ($error_jkel !="" ? "is-invalid" : "");?>" id="jkel" placeholder="Jenis Kelamin" value="<?php echo $jkel;?>">
				  	<input type="radio" name="jkel" value="laki-laki"> Laki - Laki
				  	<input type="radio" name="jkel" value="perempuan"> Perempuan
				</label><br><span class="warning"><?php echo $error_jkel;?></span>
			</div>
		</div>

		<div class="form-group row">    
			<label for="nisn" class="col-sm-4 col-form-label"> NISN </label>
			<div class="col-sm-8">
			<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : "");?>" id="nisn" placeholder="NISN" value="<?php echo $nisn;?>"><span class="warning"><?php echo $error_nisn;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="nik" class="col-sm-4 col-form-label"> NIK </label>
			<div class="col-sm-8">
			<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : "");?>" id="nik" placeholder="NIK" value="<?php echo $nik;?>"><span class="warning"><?php echo $error_nik;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="tlahir" class="col-sm-4 col-form-label"> Tempat Lahir </label>
			<div class="col-sm-8">
			<input type="text" name="tlahir" class="form-control <?php echo ($error_tlahir !="" ? "is-invalid" : "");?>" id="tlahir" placeholder="Tempat Lahir" value="<?php echo $tlahir;?>"><span class="warning"><?php echo $error_tlahir;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="tgllahir" class="col-sm-4 col-form-label"> Tanggal Lahir </label>
			<div class="col-sm-8">
			<input type="text" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : "");?>" id="tgllahir" placeholder="Tanggal Lahir Format Angka (Contoh 14081945)" value="<?php echo $tgllahir;?>"><span class="warning"><?php echo $error_tgllahir;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="noakta" class="col-sm-4 col-form-label"> No. Registrasi Akta Lahir </label>
			<div class="col-sm-8">
			<input type="text" name="noakta" class="form-control <?php echo ($error_noakta !="" ? "is-invalid" : "");?>" id="noakta" placeholder="No. Akta" value="<?php echo $noakta;?>"><span class="warning"><?php echo $error_noakta;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="agama" class="col-sm-4 col-form-label"> Agama </label>
			<div class="col-sm-8">
			<select class="form-control <?php echo ($error_agama !="" ? "is-invalid" : "");?>" id="agama" name="agama">
				<option value="kosong">--Pilih Kategori--</option>
                <option value="1">1. Islam</option>
                <option value="2">2. Kristen</option>
                <option value="3">3. Katholik</option>
                <option value="4">4. Hindu</option>
                <option value="5">5. Budha</option>
                <option value="6">6. Khong Hu Cu</option>
                <option value="7">7. Kepercayaan Kepada Tuhan YME</option>
                <option value="8">8. Lainnya</option>
			</select>
			<span class="warning"><?php echo $error_agama;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="kwn" class="col-sm-4 col-form-label"> Kewarganegaraan </label>
			<div class="col-sm-8">
			<input type="text" name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is-invalid" : "");?>" id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn;?>"><span class="warning"><?php echo $error_kwn;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="bkhusus" class="col-sm-4 col-form-label"> Berkebutuhan Khusus </label>
			<div class="col-sm-8">
			<select class="form-control <?php echo ($error_bkhusus !="" ? "is-invalid" : "");?>" id="bkhusus" name="bkhusus">
				<option value="kosong">--Pilih Kategori--</option>
                <option value="1">1. Tidak</option>
                <option value="2">2. Netra</option>
                <option value="3">3. Rungu</option>
                <option value="4">4. Grahita Ringan</option>
                <option value="5">5. Grahita Sedang</option>
                <option value="6">6. Daksa Ringan</option>
                <option value="7">7. Daksa Sedang</option>
                <option value="8">8. Laras</option>
                <option value="9">9. Wicara</option>
                <option value="10">10. Tuna Ganda</option>
                <option value="11">11. Hiper Aktif</option>
                <option value="12">12. Cerdas Istimewa</option>
                <option value="13">13. Bakat Istimewa</option>
                <option value="14">14. Kesulitan Belajar</option>
                <option value="15">15. Narkoba</option>
                <option value="16">16. Indigo</option>
                <option value="17">17. Down Sindrome</option>
                <option value="18">18. Autis</option>
			</select>
			<span class="warning"><?php echo $error_bkhusus;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="alamat" class="col-sm-4 col-form-label"> Alamat </label>
			<div class="col-sm-8">
			<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : "");?>" id="alamat" placeholder="Alamat" value="<?php echo $alamat;?>"><span class="warning"><?php echo $error_alamat;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="rt" class="col-sm-4 col-form-label"> RT </label>
			<div class="col-sm-8">
			<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : "");?>" id="rt" placeholder="RT (Contoh 001)" value="<?php echo $rt;?>"><span class="warning"><?php echo $error_rt;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="rw" class="col-sm-4 col-form-label"> RW </label>
			<div class="col-sm-8">
			<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : "");?>" id="rw" placeholder="RW (Contoh 001)" value="<?php echo $rw;?>"><span class="warning"><?php echo $error_rw;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="nmdusun" class="col-sm-4 col-form-label"> Nama Dusun </label>
			<div class="col-sm-8">
			<input type="text" name="nmdusun" class="form-control <?php echo ($error_nmdusun !="" ? "is-invalid" : "");?>" id="nmdusun" placeholder="Nama Dusun" value="<?php echo $nmdusun;?>"><span class="warning"><?php echo $error_nmdusun;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="kelurahan" class="col-sm-4 col-form-label"> Kelurahan </label>
			<div class="col-sm-8">
			<input type="text" name="kelurahan" class="form-control <?php echo ($error_kelurahan !="" ? "is-invalid" : "");?>" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan;?>"><span class="warning"><?php echo $error_kelurahan;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="kecamatan" class="col-sm-4 col-form-label"> Kecamatan </label>
			<div class="col-sm-8">
			<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : "");?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan;?>"><span class="warning"><?php echo $error_kecamatan;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="kdpos" class="col-sm-4 col-form-label"> Kode Pos </label>
			<div class="col-sm-8">
			<input type="text" name="kdpos" class="form-control <?php echo ($error_kdpos !="" ? "is-invalid" : "");?>" id="kdpos" placeholder="Kode Pos" value="<?php echo $kdpos;?>"><span class="warning"><?php echo $error_kdpos;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="lintang" class="col-sm-4 col-form-label"> Lintang </label>
			<div class="col-sm-8">
			<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : "");?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang;?>"><span class="warning"><?php echo $error_lintang;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="bujur" class="col-sm-4 col-form-label"> Bujur </label>
			<div class="col-sm-8">
			<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : "");?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur;?>"><span class="warning"><?php echo $error_bujur;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="ttinggal" class="col-sm-4 col-form-label"> Tempat Tinggal </label>
			<div class="col-sm-8">
			<select class="form-control <?php echo ($error_ttinggal !="" ? "is-invalid" : "");?>" id="ttinggal" name="ttinggal">
				<option value="kosong">--Pilih Kategori--</option>
                <option value="1">1. Bersama Orang Tua</option>
                <option value="2">2. Wali</option>
                <option value="3">3. Kos</option>
                <option value="4">4. Asrama</option>
                <option value="5">5. Panti Asuhan</option>
                <option value="6">6. Lainnya</option>
			</select>
			<span class="warning"><?php echo $error_ttinggal;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="transportasi" class="col-sm-4 col-form-label"> Moda Transportasi </label>
			<div class="col-sm-8">
			<select class="form-control <?php echo ($error_transportasi !="" ? "is-invalid" : "");?>" id="transportasi" name="transportasi">
				<option value="kosong">--Pilih Kategori--</option>
                <option value="1">1. Jalan Kaki</option>
                <option value="2">2. Kendaraan Pribadi</option>
                <option value="3">3. Kendaraan Umum</option>
                <option value="4">4. Jemputan Sekolah</option>
                <option value="5">5. Kereta Api</option>
                <option value="6">6. Ojek</option>
                <option value="7">7. Andong/Dokar/Delman</option>
                <option value="8">8. Perahu Penyebrangan</option>
                <option value="9">9. Lainnya</option>
			</select>
			<span class="warning"><?php echo $error_transportasi;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="nokks" class="col-sm-4 col-form-label"> Nomor KKS </label>
			<div class="col-sm-8">
			<input type="text" name="nokks" class="form-control <?php echo ($error_nokks !="" ? "is-invalid" : "");?>" id="nokks" placeholder="Nomor KKS" value="<?php echo $nokks;?>"><span class="warning"><?php echo $error_nokks;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="anakke" class="col-sm-4 col-form-label"> Anak Ke-berapa </label>
			<div class="col-sm-8">
			<input type="text" name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : "");?>" id="anakke" placeholder="Anak Ke-berapa" value="<?php echo $anakke;?>"><span class="warning"><?php echo $error_anakke;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="kps" class="col-sm-4 col-form-label"> Penerima KPS </label>
			<div class="col-sm-8">
				<label class="radio-inline  <?php echo ($kps !="" ? "is-invalid" : "");?>" id="kps" placeholder="Penerima KPS" value="<?php echo $kps;?>">
				  	<input type="radio" name="kps" value="Y"> Ya
				  	<input type="radio" name="kps" value="T"> Tidak
				</label><br><span class="warning"><?php echo $error_kps;?></span>
			</div>
		</div>
		<div class="form-group row">    
			<label for="nokps" class="col-sm-4 col-form-label"> No. KPS/PKH </label>
			<div class="col-sm-8">
			<input type="text" name="nokps" class="form-control <?php echo ($error_nokps !="" ? "is-invalid" : "");?>" id="nokps" placeholder="No. KPS/PKH" value="<?php echo $nokps;?>"><span class="warning"><?php echo $error_nokps;?></span>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-8">
				<button type="reset" class="btn btn-outline-danger"> Reset</button>
				<button type="submit" class="btn btn-outline-success"> Submit</button>
			</div>	
		</div>
	</form>
</div>
</div>
</div>
</div>
</body>
</html>