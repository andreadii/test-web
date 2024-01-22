<?php
include "config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $whatsapp = $_POST["whatsapp"];
    $note = $_POST["catatan_penjoki"];
    $jokiType = $_POST["pilihan_joki"];
    $jokiRank = isset($_POST["joki-rank"]) ? $_POST["joki-rank"] : null; // Ganti menjadi isset untuk menghindari error
    $jokiUCL = isset($_POST["joki-ucl"]) ? $_POST["joki-ucl"] : null; // Ganti menjadi isset untuk menghindari error
    $jokiLiveEvent = isset($_POST["joki-live-event"]) ? $_POST["joki-live-event"] : null; // Ganti menjadi isset untuk menghindari error
    $metodeLogin = $_POST["metode_login"]; // Tambahkan variabel metodeLogin untuk menyimpan data metode_login

    // SQL query to insert data into the database
    $sql = "INSERT INTO lengkapi_data (nickname, email, password, whatsapp, note, joki_type, metode_login)
            VALUES ('$nickname', '$email', '$password', '$whatsapp', '$note', '$jokiType', '$metodeLogin')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully, redirect to WhatsApp
        $whatsappUrl = "https://wa.me/085156426389";
        header("Location: $whatsappUrl");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
