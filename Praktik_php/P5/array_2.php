<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Dosen</title>
 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tabel Data Dosen</h2>
<?php

$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];


echo "<table>";
echo "<tr><th>Nama</th><td>{$Dosen['nama']}</td></tr>";
echo "<tr><th>Domisili</th><td>{$Dosen['domisili']}</td></tr>";
echo "<tr><th>Jenis Kelamin</th><td>{$Dosen['jenis_kelamin']}</td></tr>";
echo "</table>";
?>

</body>
</html>
