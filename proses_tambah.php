<?php
$nama = $_POST['nama'];
$asal = $_POST['asal'];

$database = new PDO("mysql:host=localhost; dbname=ppdb", "root", "");
$query = $database->query("insert into calon_siswa values('','$nama','$asal')");

if($query){
    header("Location:index.php");
 }