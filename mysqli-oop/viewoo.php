<?php 
	$con = new mysqli("localhost", "root", "");
	$con->select_db("php_db");
	$hasil = $con->query("select * from mahasiswa");
	$jumlah = $hasil->num_rows;
	echo "<center> DATA MAHASISWA</center>";
	echo "Jumlahh Mahasiswa : $jumlah";
	$a=1;
	while ($baris = $hasil->fetch_array())
	{
		echo "<br>";
		echo $a;
		echo "<br>";
		echo "NIK 		: ";
		echo $baris[0];
		echo "<br>";
		echo "Email 	: ";
		echo $baris[1];
		echo "<br>";
		echo "Komentar 	:";
		echo $baris[2];
		$a++;
	}
?>