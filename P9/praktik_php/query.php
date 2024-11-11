
// <?php
//   include_once "koneksi.php";
//    $sql = "CREATE TABLE IF NOT EXISTS user (
//    id INT(11),
//   username VARCHAR(50) NOT NULL,
//    password VARCHAR(50) NOT NULL,
//    PRIMARY KEY(id)
//    )";
//    if (mysqli_query($conn, $sql)) {
//   echo "Tabel 'user' berhasil dibuat!";
//    } else {
//    echo "Error: " . mysqli_error($conn);
//    }
//    $conn->close();
// ?>

// <?php
//    include_once "koneksi.php";
//    $sql = " INSERT INTO `user` (`id`, `username`, `password`) VALUES
//    ('1', 'admin', MD5('123'));";
//    if (mysqli_query($conn, $sql)) {
//    echo "Data berhasil ditambahkan pada tabel 'user'!";
//    } else {
//    echo "Error: " . mysqli_error($conn);
//    }
//    $conn->close();
// ?>