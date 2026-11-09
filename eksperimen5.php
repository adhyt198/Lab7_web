<?php
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");

    if ($nama === "") {
        $hasil = "Nama belum diisi.";
    } else {
        $hasil = "Halo, " . htmlspecialchars($nama) . "!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form dengan Tombol Reset</title>
</head>
<body>
    <h2>Formulir Nama Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan Nama:</label><br>
        <input type="text" name="nama">

        <br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>

    <h3><?= $hasil ?></h3>
</body>
</html>