
<?php

$mahasiswa = [
    [
        "nim" => "124356",
        "nama" => "rama raditya",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "ratya@gmail.com",
        "nilai" => 99
    ],
    [
        "nim" => "671368",
        "nama" => "keni sayang",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "keni@gmail.com",
        "nilai" => 85
    ],
    [
        "nim" => "89172",
        "nama" => "rasa ra",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "rasa@gmail.com",
        "nilai" => 75
    ],
    [
        "nim" => "829352",
        "nama" => "kala",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "kala@gmail.com",
        "nilai" => 65
    ],
    [
        "nim" => "293005",
        "nama" => "nala",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "nala@upi.edu",
        "nilai" => 55
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body style="font-family: Arial; background-color: #fff0f7; margin: 0; padding: 25px;">

    <div style="background-color: white; max-width: 1000px; margin: auto; padding: 25px; border-radius: 10px;">

        <h2 style="color: #d45b9d; text-align: center;">Data Mahasiswa</h2>
        <p style="text-align: center; color: #777;">Daftar Nilai Mahasiswa</p>

        <table border="1" cellpadding="10" cellspacing="0"
            style="width: 100%; border-collapse: collapse; text-align: center; border-color: #edc6dc;">

            <tr style="background-color: #f7d6e8;">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>

            <?php $no = 1; ?>

            <?php foreach ($mahasiswa as $data): ?>

                <?php
                if ($data["nilai"] >= 80) {
                    $grade = "A";
                } elseif ($data["nilai"] >= 70) {
                    $grade = "B";
                } elseif ($data["nilai"] >= 60) {
                    $grade = "C";
                } else {
                    $grade = "D";
                }

                if ($data["nilai"] >= 70) {
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
                ?>

                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data["nim"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["email"] ?></td>
                    <td><?= $data["nilai"] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $status ?></td>

                    <td>
                        <a href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>"
                            style="color: #d45b9d; text-decoration: none;">
                            Lihat Detail
                        </a>
                    </td>
                </tr>

                <?php $no++; ?>

            <?php endforeach; ?>

        </table>

        <p style="margin-top: 25px;">
            <a href="form_pesan.php"
                style="background-color: #d45b9d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
                Form Pesan dan Kesan
            </a>
        </p>

    </div>

</body>
</html>
