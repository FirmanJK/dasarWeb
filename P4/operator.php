<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (&&) antara \$a dan \$b: " . var_export($hasilAnd, true) . "<br>";
echo "Hasil OR (||) antara \$a dan \$b: " . var_export($hasilOr, true) . "<br>";
echo "Hasil NOT (!\$a): " . var_export($hasilNotA, true) . "<br>";
echo "Hasil NOT (!\$b): " . var_export($hasilNotB, true) . "<br>";

echo "Hasil perbandingan $a sama dengan $b (==): " . var_export($hasilSama, true) . "<br>";
echo "Hasil perbandingan $a tidak sama dengan $b (!=): " . var_export($hasilTidakSama, true) . "<br>";
echo "Hasil perbandingan $a lebih kecil $b (<): " . var_export($hasilLebihKecil, true) . "<br>";
echo "Hasil perbandingan $a lebih besar $b (>): " . var_export($hasilLebihBesar, true) . "<br>";
echo "Hasil perbandingan lebih kecil atau sama dengan $b (<=): " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Hasil perbandingan lebih besar atau sama dengan $b (>=): " . var_export($hasilLebihBesarSama, true) . "<br>";

echo "Hasil penjumlahan $a dan $b adalah $hasilTambah. <br>";
echo "Hasil pengurangan $a dan $b adalah $hasilKurang. <br>";
echo "Hasil perkalian $a dan $b adalah $hasilKali. <br>";
echo "Hasil pembagian  $a dan $b adlaah $hasilBagi. <br>";
echo "Sisa bagi $a dan $b adalah $sisaBagi. <br>";
echo "Hasil pangkat $a dan $b adalah $pangkat. <br>";
?>