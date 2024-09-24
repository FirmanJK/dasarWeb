<?php
$totalSkor = 40;

$hadiahTambahan = ($totalSkor > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan" . "<br>" ;
echo "<br>";
?>

$hargaProduk = 120000;

$persenDiskon = 20;

$diskon = ($hargaProduk * $persenDiskon) / 100;

$hargaSetelahDiskon = $hargaProduk - $diskon;


echo "Harga produk awal: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
echo "<br>";


array_pop($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai" . "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
                echo "Nilai: $nilai (Tidak lulus) <br>";
                continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    echo "Skor ujian: " . $skor . "<br>";
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor" . "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Jumlah lahan: " . $jumlahLahan;
echo "<br> Tanaman per Lahan: " . $tanamanPerLahan;
echo "<br> Buah per tanaman: " . $buahPerTanaman;

for ($i = 1; $i <= $jumlahLahan ; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br> Jumlah buah yang akan dipanen adalah: $jumlahBuah" . "<br>";

$nilaiNumerik = 92;

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "<br> Hari ke-" . $hari;
    echo "<br> Jarak saat ini yang sudah ditempuh oleh atlet adalah: " . $jarakSaatIni . "<br>";
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "<br>Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "<br>Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "<br>Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "<br>Nilai huruf: D";
}
?>