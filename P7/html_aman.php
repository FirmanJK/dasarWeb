<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <form method="POST" action="">
        <label for="input_text">Masukkan teks :</label>
        <input type="text" id="input_text" name="input_text" required><br><br>
        <label for="input_email">Masukkan Email :</label>
        <input type="email" id="input_email" name="input_email" required><br><br>
        <button type="submit">submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_text = htmlspecialchars($_POST['input_text'], ENT_QUOTES, 'UTF-8');
        echo "Input teks yang dimasukkan : " . $input_text . "<br>";
        $input_email = $_POST['input_email'];
        if (filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
            echo "Email yang dimasukkan : " . htmlspecialchars($input_email, ENT_QUOTES, 'UTF-8') . "<br>";
        } else {
            echo "Email tidak valid!";
        }
    }
    ?>
</body>
</html>