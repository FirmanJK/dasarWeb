<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
?>

<?php
$pattern = '/[0-9]+/'; //Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>" ."Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>". $new_text; // Output: "I like banana pir."
?>

<?php
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood, dll.
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>" . "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
$pattern = '/go?d/'; // Cocokkan "gd", "god", "good"
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>" . "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

<?php
$pattern = '/go{1,3}d/'; // Cocokkan "gd", "god", "good", "goood"
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>" . "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>