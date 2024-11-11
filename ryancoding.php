<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }
        .content {
            text-align: center;
            font-size: 28px;
            line-height: 1.5;
        }
    </style>
</head>
<body>

<?php
// Data mahasiswa
$nama = "Ryan Ma'arif";
$npm = "G1C019080";
$mataKuliah = "Coding dan Pemrogaman";
$kelas = "Kelas B";
$kataMutiara = "Talk Less, Do More";

// Menampilkan data
echo "<div class='content'>";
echo "<p><strong>Nama:</strong> " . $nama . "</p>";
echo "<p><strong>NPM:</strong> " . $npm . "</p>";
echo "<p><strong>Mata Kuliah:</strong> " . $mataKuliah . "</p>";
echo "<p><strong>Kelas:</strong> " . $kelas . "</p>";
echo "<p><em>\"" . $kataMutiara . "\"</em></p>";
echo "</div>";
?>

</body>
</html>
