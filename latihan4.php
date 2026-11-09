
<?php

function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

$hargaAwal = 150000;
$diskon = 10;

$hargaAkhir = hitungDiskon($hargaAwal, $diskon);

echo "Harga awal: Rp" . number_format($hargaAwal, 0, ",", ".") . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");

?>
