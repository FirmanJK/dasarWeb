<?php

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Memanggil fungsi hitungUmur dan mencetak hasilnya
echo "Umur saya adalah ". hitungUmur(2004, 2024) . " tahun"; 
// Ganti tahun lahir sesuai dengan Anda
?>