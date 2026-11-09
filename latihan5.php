
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pencarian GET</title>
</head>
<body>

    <h2>Form Pencarian</h2>

    <form method="GET" action="">
        <label for="kata">Masukkan nama:</label>
        <input type="text" id="kata" name="kata">

        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);

        echo "<p>Kata yang kamu cari: "
            . htmlspecialchars($kata, ENT_QUOTES, "UTF-8")
            . "</p>";
    }
    ?>

</body>
</html>
