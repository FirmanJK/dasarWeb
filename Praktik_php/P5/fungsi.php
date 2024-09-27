<?php
ffunction perkenalan($nama, $salam) {
    echo "$salam, ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Menggunakan variabel untuk nama dan salam
$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil fungsi dengan parameter yang berbeda-beda
perkenalan($saya, $ucapanSalam);
perkenalan("Hamdana", "Hallo");
?>