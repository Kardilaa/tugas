<?php

 $nama = $_POST['nama'];
 $asal = $_POST['asal'];
 $id = $_POST['id'];
 $database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
 $query = $database->query("UPDATE `calon_siswa` SET nama='$nama',asal='$asal' WHERE id='$id'");

 if($query){
    header("Location:index.php");
 }