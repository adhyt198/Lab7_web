<?php
$nama = "Adhytia";
$tugas = 90;
$uts = 95;
$uas = 95;

$rataRata = ($tugas + $uts + $uas) / 3;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Rata-Rata</title>
</head>
<body>
    <h2>Perhitungan Nilai Rata-Rata</h2>

    Nama: <?= $nama ?><br>
    Nilai Tugas: <?= $tugas ?><br>
    Nilai UTS: <?= $uts ?><br>
    Nilai UAS: <?= $uas ?><br>

    <h3>Nilai Rata-Rata: <?= number_format($rataRata, 2) ?></h3>
</body>
</html>