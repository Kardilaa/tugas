<?php
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
//echo ini proses tambah
$database = new PDO('mysql:host=localhost;dbname=mutujaya','root','');
$query = $database->query("insert into siswa values('','$nama','$kelas')");

