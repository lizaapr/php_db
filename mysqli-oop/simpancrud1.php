<!DOCTYPE html>
<html>
<head>
	<title>Simpan Crud</title>
</head>
<body>
<h1> Simpan</h1>
<?php
$NIK = $_POST["NIK"];
$Nama = $_POST["Nama"];
$Alamat = $_POST["Alamat"];

$conn = new mysqli("localhost","root","","php_db");

if ($conn=>connect_error){
	die{
		"koneksi gagal".$conn->connect_error);
	}
	else{
		$sql = "insert into mahasiswa (NIM, Nama, Alamat) value ('$NIM', '$Nama', '$Alamat')";
		$hasil = $conn->query($sql);

		echo "NIM : $NIM<br>";
		echo "Nama : $Nama<br>";
		echo "Alamat : $Alamat<br>";

		echo "Telah berhasil disimpan";
		?>
	}
}
</body>
</html>