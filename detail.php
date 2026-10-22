
<?php

$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];
$grade = $_GET["grade"];
$status = $_GET["status"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body style="font-family: Arial; background-color: #fff0f7; margin: 0; padding: 25px;">

    <div style="background-color: white; max-width: 500px; margin: auto; padding: 25px; border-radius: 10px;">

        <h2 style="color: #d45b9d; text-align: center;">Detail Mahasiswa</h2>
        <hr style="border: 1px solid #f3d6e5;">

        <p><b>NIM:</b> <?= $nim ?></p>
        <p><b>Nama:</b> <?= $nama ?></p>
        <p><b>Jurusan:</b> <?= $jurusan ?></p>
        <p><b>Email:</b> <?= $email ?></p>
        <p><b>Nilai:</b> <?= $nilai ?></p>
        <p><b>Grade:</b> <?= $grade ?></p>
        <p><b>Status:</b> <?= $status ?></p>

        <a href="index.php"
            style="display: inline-block; background-color: #d45b9d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
            Kembali
        </a>

    </div>

</body>
</html>
