<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dasar</title>
</head>
<body>
    <h2>form input</h2>
    <form method="post">
        <label>nama:</label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>

    <?
    echo "selamat datang" . $_POST["nama"];
    ?>

<!-- operator -->
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "gaji sebelum pajak = Rp. $gaji <br>";
    echo "gaji dibawa pulang = Rp. $thp<br>";
    ?>

    <!-- kondisi if -->
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa<br>";
    }
?>

<!-- kondiai switch -->
<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
}
?>

<!-- perulangan for -->
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
echo "Perulangan ke: " . $i . '<br />';
}
?>

<!-- perulangan while -->
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
echo "Perulangan ke: " . $i . '<br />';
$i++;
}
?>

<!-- perulangan dowhile -->
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
echo "Perulangan ke: " . $i . '<br />';
$i++;
} while ($i<=10);
?>


</body>
</html>