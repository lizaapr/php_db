<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nim = $_POST['nim'];

$host->query("INSERT INTO mahasiswa (nim,nama,alamat) VALUES('$nim','$nama','$alamat')");

header("location:index.php?pesan=input");
?>