<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Lakukan proses penyimpanan file di sini
        // Misalnya:
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File berhasil diunggah!";
        } else {
            echo "Terjadi kesalahan saat menyimpan file.";
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>