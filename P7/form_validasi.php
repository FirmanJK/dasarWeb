<!DOCTYPE html>
<html>
<head>
  <title>Form Input dengan Validasi</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi</h1>
  <form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>
    <input type="submit" value="Submit">
  </form>
  <div id="result" style="margin-top: 20px;">Tempat untuk menampilkan hasil</div>
  <script>
  $(document).ready(function() {
    $("#myForm").submit(function(event) {
      var nama = $("#nama").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var valid = true;

      // Validasi Nama
      if (nama === "") {
        $("#nama-error").text("Nama harus diisi.");
        valid = false;
      } else {
        $("#nama-error").text("");
      }

      // Validasi Email
      if (email === "") {
        $("#email-error").text("Email harus diisi.");
        valid = false;
      } else if (!isValidEmail(email)) {
        $("#email-error").text("Format email tidak valid.");
        valid = false;
      } else {
        $("#email-error").text("");
      }

      // Validasi Password
      if (password.length < 8) {
        $("#password-error").text("Password harus minimal 8 karakter.");
        valid = false;
      } else {
        $("#password-error").text("");
      }

      if (!valid) {
        event.preventDefault(); // Mencegah pengiriman form jika validasi gagal
      } else {
        event.preventDefault(); // Mencegah pengiriman form secara default
        var formData = $(this).serialize();

        // Mengirim data ke server menggunakan AJAX
        $.ajax({
          url: "proses_validasi.php", // Sesuaikan dengan nama file PHP yang sesuai
          type: "POST",
          data: formData,
          success: function(response) {
            // Tampilkan hasil dari server di div "result"
            $("#result").html(response);
          },
          error: function() {
            $("#result").html("<p style='color: red;'>Terjadi kesalahan saat mengirim data.</p>"); // Menangani kesalahan jika terjadi
          }
        });
      }
    });
  });

  function isValidEmail(email) {
    // Fungsi untuk memvalidasi format email (bisa disesuaikan dengan kebutuhan)
    // Contoh sederhana menggunakan regular expression
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }
  </script>
</body>
</html>