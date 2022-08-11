<?php
 $db = new PDO("mysql:host=localhost;dbname=ppdb",'root','');
 $query = $db->query('DELETE FROM `calon_siswa` WHERE id = 333');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>

