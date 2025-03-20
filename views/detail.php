<?php
require_once("Controllers/prodi.php");

if (isset($_GET['id'])){
    $id = $_GET['id']:
    $data = $prodi->show($id;)
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail prodi</title>
</head>
<body>
    <hi>Detail prodi </h1>
    <?php if($data):?>

        <p>Kode: <?= $data['kode']   ?></p>
        <p>Nama: <?= $data['nama']   ?></p>
        <p>Kaprodi: <?= $data['kaprodi']   ?></p >
        <?php else: ?>
            <p>DATA tidak ditemukan</p>
            <?php endif; ?>
            <a herf="?url=prodi">kembali</a>
</body>
</html>