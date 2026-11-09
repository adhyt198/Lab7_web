<?php
$mahasiswa = ["Adhytia", "Andi", "Budi", "Citra", "Dina"];

$hasil = "";

if (isset($_GET["nama"])) {
    $cari = trim($_GET["nama"]);

    if ($cari !== "") {
        foreach ($mahasiswa as $nama) {
            if (stripos($nama, $cari) !== false) {
                $hasil .= $nama . "<br>";
            }
        }

        if ($hasil === "") {
            $hasil = "Nama tidak ditemukan.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>
    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <input type="text" name="nama" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <h3>Hasil Pencarian:</h3>
    <?= $hasil ?>
</body>
</html>