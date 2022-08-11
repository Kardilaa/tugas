<?php
//koneksi
$id = $_GET['id'];
$nama = $_GET['nama'];
$asal = $_GET['asal'];

$database = new PDO("mysql:host=localhost; dbname=ppdb", "root", "");
$query = $database->query("DELETE FROM `calon_siswa` WHERE id = 333('$id','$nama','$asal')");
