<?php
function formatRupiah($harga) {
    return "Rp " . number_format($harga, 0, ",", ".");
}

$harga1 = 150000;
$harga2 = 75000;
$harga3 = 250000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Format Harga Rupiah</title>
</head>
<body>
    <h2>Format Harga ke Rupiah</h2>

    <p>Harga 1: <?= formatRupiah($harga1) ?></p>
    <p>Harga 2: <?= formatRupiah($harga2) ?></p>
    <p>Harga 3: <?= formatRupiah($harga3) ?></p>
</body>
</html>