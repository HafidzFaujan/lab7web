<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $job = $_POST['job'];

    // Hitung umur
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate)->y;

    // Tentukan gaji berdasarkan pekerjaan
    switch ($job) {
        case 'developer':
            $salary = "Rp. 8,000,000";
            break;
        case 'designer':
            $salary = "Rp. 6,000,000";
            break;
        case 'manager':
            $salary = "Rp. 10,000,000";
            break;
        default:
            $salary = "Tidak diketahui";
            break;
    }

    // Tampilkan hasil
    echo "<h2>Hasil Input</h2>";
    echo "Nama: " . htmlspecialchars($name) . "<br>";
    echo "Tanggal Lahir: " . htmlspecialchars($dob) . "<br>";
    echo "Umur: " . $age . " tahun<br>";
    echo "Pekerjaan: " . ucfirst($job) . "<br>";
    echo "Gaji: " . $salary . "<br>";
}
?>
