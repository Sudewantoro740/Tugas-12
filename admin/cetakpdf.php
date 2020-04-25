<?php
include('koneksi.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from formulir");
$html = '<center><h3>Daftar Data Siswa</h3></center><hr/><br/>';

$html .= "<p>Keterangan :</p>";
$html .= "<p>Agama : (1) Islam, (2) Kristen, (3) Katholik, (4) Hindu, (5) Budha, (6) Khong Hu Cu, (7) Kepercayaan Kepada Tuhan YME, (8) Lainnya</p></br>";
$html .= "<p>Berkebutuhan Khusus : (1) Tidak, (2) Netra, (3) Rungu, (4) Grahita Ringan, (5) Grahita Sedang, (6) Daksa Ringan, (7) Daksa Sedang, (8) Laras, (9) Wicara, (10) Tuna Ganda, (11) Hiper Aktif, (12) Cerdas Istimewa, (13) Bakat Istimewa, (14) Kesulitan Belajar, (15) Narkoba, (16) Indigo, (17) Down Sindrome, (18) Autis</p></br>";
$html .= "<p>Tempat Tinggal : (1) Bersama Orang Tua, (2) Wali, (3) Kos, (4) Asrama, (5) Panti Asuhan, (6) Lainnya</p></br>";
$html .= "<p>Moda Transportasi : (1) Jalan Kaki, (2) Kendaraan Pribadi, (3) Kendaraan Umum, (4) Jemputan Sekolah, (5) Kereta Api, (6) Ojek, (7) Andong/Dokar/Delman, (8) Perahu Penyebrangan, (9) Lainnya</p>";


$no = 1;
while($row = mysqli_fetch_array($query))
{
	$html .= "<center><br><hr><h3>Data Siswa ".$no."</h3></center><br/>";
	$html .= "<table>
		<tr>
			<td>Nama</td>
			<td> :</td>
			<td>".$row['nama']."</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> :</td>
			<td>".$row['jkel']."</input></td>
		</tr>
		<tr>
			<td>NISN</td>
			<td> :</td>
			<td>".$row['nisn']."</td>
		</tr>
		<tr>
			<td>NIK</td>
			<td> :</td>
			<td>".$row['nik']."</td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td> :</td>
			<td>".$row['tlahir']."</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td> :</td>
			<td>".$row['tgllahir']."</td>
		</tr>
		<tr>
			<td>No. Registrasi Akta Lahir</td>
			<td> :</td>
			<td>".$row['noakta']."</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td> :</td>
			<td>".$row['agama']."</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td> :</td>
			<td>".$row['kwn']."</td>
		</tr>
		<tr>
			<td>Berkebutuhan Khusus</td>
			<td> :</td>
			<td>".$row['bkhusus']."</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> :</td>
			<td>".$row['alamat']."</td>
		</tr>
		<tr>
			<td>RT</td>
			<td> :</td>
			<td>".$row['rt']."</td>
		</tr>
		<tr>
			<td>RW</td>
			<td> :</td>
			<td>".$row['rw']."</td>
		</tr>
		<tr>
			<td>Nama Dusun</td>
			<td> :</td>
			<td>".$row['nmdusun']."</td>
		</tr>
		<tr>
			<td>Kelurahan</td>
			<td> :</td>
			<td>".$row['kelurahan']."</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td> :</td>
			<td>".$row['kecamatan']."</td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td> :</td>
			<td>".$row['kdpos']."</td>
		</tr>
		<tr>
			<td>Lintang</td>
			<td> :</td>
			<td>".$row['lintang']."</td>
		</tr>
		<tr>
			<td>Bujur</td>
			<td> :</td>
			<td>".$row['bujur']."</td>
		</tr>
		<tr>
			<td>Tempat Tinggal</td>
			<td> :</td>
			<td>".$row['ttinggal']."</td>
		</tr>
		<tr>
			<td>Moda Transportasi</td>
			<td> :</td>
			<td>".$row['transportasi']."</td>
		</tr>
		<tr>
			<td>Nomor KKS</td>
			<td> :</td>
			<td>".$row['nokks']."</td>
		</tr>
		<tr>
			<td>Anak Ke</td>
			<td> :</td>
			<td>".$row['anakke']."</td>
		</tr>
		<tr>
			<td>Penerima KPS</td>
			<td> :</td>
			<td>".$row['kps']."</td>
		</tr>
		<tr>
			<td>No. KPS/PKH</td>
			<td> :</td>
			<td>".$row['nokps']."</td>
		</tr>

	</table>";
 	$no++;
}
$html .= "</html>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('Report Formulir Siswa.pdf');
header("location:../admin/cetak.php");
?>
