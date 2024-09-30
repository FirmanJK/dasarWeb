<?php

$pesan = "Saya arek malang";

# Ubah variabel $pesan menjadi array
$pesanPerKata = explode(" ", $pesan);

# Ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);

# Gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan, "<br>";
?>