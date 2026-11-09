<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");

    if ($nim === "") {
        $pesan = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka.";
    } elseif (strlen($nim) !== 6) {
        $pesan = "NIM harus terdiri dari 6 digit.";
    } else {
        $pesan = "NIM valid: " . htmlspecialchars($nim);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>
    <h2>Form Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim" required>
        <button type="submit">Periksa NIM</button>
        <button type="reset">Reset</button>
    </form>

    <p><?= $pesan ?></p>
</body>
</html>