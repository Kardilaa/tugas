<?php
 $database = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
 $query = $database->query("select * from calon_siswa");

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="index_edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>