
<?php

$mahasiswa = [
    "daniel",
    "samit",
    "cibek",
    "andry",
    "fijar",
    "ucup",
    "Adhytia"
];

echo "<h2>Daftar Mahasiswa</h2>";
echo "<ol>";

foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}

echo "</ol>";

?>
