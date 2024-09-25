<?php
// Fungsi untuk menampilkan pesan "Halo dunia!" sebanyak 25 kali
function tampilkanPesan() {
    for ($i = 1; $i <= 25; $i++) {
        echo "Perulangan ke-{$i} <br>";
    }
}

// Memanggil fungsi untuk menampilkan pesan
tampilkanPesan();

function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // Panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
?>