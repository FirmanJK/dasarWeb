<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    if (preg_match('/[@#$0-9]/', $nama)) {
        echo "Nama tidak boleh mengandung simbol @#$ atau angka.";
        exit;
    }

    $avg = ($nilai1 + $nilai2 + $nilai3) / 3;
    $grade = '';

    if ($avg >= 87) {
        $grade = "A+";
    } elseif ($avg >= 76) {
        $grade = "A";
    } elseif ($avg >= 61) {
        $grade = "B";
    } elseif ($avg >= 50) {
        $grade = "C";
    } elseif ($avg >= 31) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo "Nama : $nama<br>";
    echo "Nilai rata-rata : $avg<br>";
    echo "Grade : $grade<br>";
}
?>