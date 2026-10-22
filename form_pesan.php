
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
</head>
<body style="font-family: Arial; background-color: #fff0f7; margin: 0; padding: 25px;">

    <div style="background-color: white; max-width: 500px; margin: auto; padding: 25px; border-radius: 10px;">

        <h2 style="color: #d45b9d; text-align: center;">Form Pesan dan Kesan</h2>
        <p style="text-align: center; color: #777;">Silakan isi form berikut.</p>

        <form action="hasil.php" method="POST">

            <label>Nama</label><br>
            <input type="text" name="nama" required
                style="width: 95%; padding: 9px; margin-top: 7px; margin-bottom: 15px; border: 1px solid #e5b9d0; border-radius: 5px;">

            <br>

            <label>Kelas</label><br>
            <input type="text" name="kelas" required
                style="width: 95%; padding: 9px; margin-top: 7px; margin-bottom: 15px; border: 1px solid #e5b9d0; border-radius: 5px;">

            <br>

            <label>Pesan dan Kesan</label><br>
            <textarea name="pesan" rows="4" required
                style="width: 95%; padding: 9px; margin-top: 7px; margin-bottom: 15px; border: 1px solid #e5b9d0; border-radius: 5px;"></textarea>

            <br>

            <button type="submit" name="tombol_kirim"
                style="background-color: #d45b9d; color: white; padding: 10px 18px; border: none; border-radius: 5px;">
                Kirim
            </button>

        </form>

        <p>
            <a href="index.php" style="color: #d45b9d; text-decoration: none;">
                Kembali ke halaman utama
            </a>
        </p>

    </div>

</body>
</html>
