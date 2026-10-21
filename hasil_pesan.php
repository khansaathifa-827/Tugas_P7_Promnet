
<?php

$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
</head>
<body style="font-family: Arial; background-color: #fff0f7; margin: 0; padding: 25px;">

    <div style="background-color: white; max-width: 500px; margin: auto; padding: 25px; border-radius: 10px;">

        <h2 style="color: #d45b9d; text-align: center;">Hasil Pesan</h2>
        <hr style="border: 1px solid #f3d6e5;">

        <p><b>Nama:</b> <?= $nama ?></p>
        <p><b>Kelas:</b> <?= $kelas ?></p>
        <p><b>Pesan dan Kesan:</b></p>

        <p style="background-color: #fff0f7; padding: 12px; border-radius: 5px;">
            <?= $pesan ?>
        </p>

        <a href="form_pesan.php"
            style="background-color: #d45b9d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
            Isi Lagi
        </a>

        <a href="index.php"
            style="color: #d45b9d; margin-left: 10px; text-decoration: none;">
            Halaman Utama
        </a>

    </div>

</body>
</html>
