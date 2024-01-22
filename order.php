<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $whatsapp = $_POST["whatsapp"];
    $note = $_POST["note"];
    $jokiType = $_POST["joki"];
    $jokiRank = $_POST["joki-rank"];
    $jokiUCL = $_POST["joki-ucl"];
    $jokiLiveEvent = $_POST["joki-live-event"];

    $sql = "INSERT INTO lengkapi_data (nickname, email, password, whatsapp, note, joki_type, metode_login)
            VALUES ('$nickname', '$email', '$password', '$whatsapp', '$note', '$jokiType', '$metodeLogin')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order - LeapJoki</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Css LeapBaru.css" />

    <style>
        body {
            background-color: #2c3137 !important;
            color: #fff;
        }

        .home {
            color: #fff;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .navbar {
            background-color: #212529; 
        }

        .navbar-brand,
        .navbar-nav .nav-link,
        .nav-item .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #c3c4c5;
        }

        .order .btn-primary {
            background-color: transparent;
            color: #fff;
            border: 2px solid #08f46c;
        }

        .order .btn-primary:hover {
            background-color: #08f46c;
        }

        .footer {
            background-color: #08f46c !important;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <nav class="navbar navbar-expand-md bg-dark fixed-top">
            <div class="container-md">
                <a class="navbar-brand" href="index.php">LEAP<span style="color: #08f46c">JOKI</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cara Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Lengkapi Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar end -->

    <!-- Cara Kerja Section -->
    <section class="proses" id="proses">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-center mb-4">
                Cara <span style="color: #08f46c">Kerja</span>
            </h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-center" style="background-color: #282c30; color: #fff">
                        <div class="card-body">
                            <div class="order-instructions" style="text-align: left">
                                <p>Open 24 Jam</p>
                                <p>
                                    Orderan Joki Di Cek Pukul 07.00 - 21.00 WIB (Jika Order
                                    Melewati Batas Pengecekan Orderan, Maka Orderan Di Cek di
                                    Hari Berikutnya)
                                </p>
                                <p>Cara Kerja:</p>
                                <ol>
                                    <li>Isi data dengan benar</li>
                                    <li>Masukkan nomor WhatsApp yang benar!</li>
                                    <li>Pilih Jenis Joki</li>                                
                                    <li>Pilih Metode Pembayaran</li>
                                    <li>Pilih Metode Login</li>
                                    <li>Lakukan Pembayaran & kirim bukti pembayaran</li>
                                </ol>
                                <p>
                                    Orderan Joki akan segera di proses setelah pembayaran
                                    berhasil
                                </p>
                                <p>Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</p>
                                <p>Minimal 1x24 Jam - Maximal 2x24 Jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cara Order Section end -->

    <!-- Lengkapi Data Section -->
    <section class="form" id="form">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-center mb-4">
                Lengkapi <span style="color: #08f46c">Data</span>
            </h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="background-color: #282c30; color: #fff;">
                        <div class="card-body">
                            <!-- Formulir Lengkapi Data -->
                            <form id="lengkapiDataForm" action="proses_lengkapi_data.php" method="post">
                                <div class="mb-3">
                                    <label for="nickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Masukkan Nickname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="whatsapp" class="form-label">Nomor Whatsapp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Masukkan Whatsapp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pilihan_joki" class="form-label">Pilih Jasa Joki</label>
                                    <select class="form-select" id="pilihan_joki" name="pilihan_joki" required>
                                        <option value="rank">Rank</option>
                                        <option value="ucl">UCL</option>
                                        <option value="event">EVENT</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="joki" class="form-label">Pilih Jenis Joki (Tuliskan teks)</label>
                                    <input type="text" class="form-control" id="joki" name="joki" placeholder="Misal: Kelas Dunia 3-Fifa Champ/Legendary/Mode Tantangan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="metode_pembayaran" class="form-label">Pilih Metode Pembayaran</label>
                                    <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                                        <option value="gopay">GoPay</option>    
                                        <option value="dana">DANA</option>
                                        <option value="atm">ATM</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="metode_login" class="form-label">Login Via</label>
                                    <select class="form-select" id="metode_login" name="metode_login" required>
                                        <option value="google">Google</option>
                                        <option value="facebook">Facebook</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="catatan_penjoki" class="form-label">Catatan untuk Penjoki</label>
                                    <textarea class="form-control" id="catatan_penjoki" name="catatan_penjoki" placeholder="Tambahkan catatan khusus untuk penjoki"></textarea>
                                </div>
                                <div class="text-center">
                                            <button type="submit" class="btn btn-primary" style="background-color: #08f46c; border: none; outline: none;">
                                        <i class="bi bi-cart-fill"></i> Order Sekarang
                                    </button>
                                </div>
                            </form>
                            <!-- Formulir Lengkapi Data end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lengkapi Data Section end -->

    <!-- Footer Section start -->
    <div class="container text-center">
        <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 border-top">
            <p class="col4 mb-0">&copy; 2023 Dibuat oleh Leap.</p>
            <div class="col4 d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link px-2">LEAP<span style="color: #08f46c">JOKI</span></a>
                    </li>
                </ul>
            </div>
            <div class="col4 d-flex justify-content-center">
                <a href="https://www.tiktok.com/@leapcby" class="nav-link px-2"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.instagram.com/leap_joki/" class="nav-link px-2"><i class="bi bi-instagram"></i></a>
            </div>
        </footer>
    </div>
    <!-- Footer Section end -->

    <!-- Script -->
<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function redirectToLoginPage() {
            window.location.href = "login.html";
        }

        document
            .querySelector(".nav-link[href='#order']")
            .addEventListener("click", redirectToLoginPage);
    </script>
    <script>
        document.getElementById("lengkapiDataForm").addEventListener("submit", function () {
            window.location.href = "order.php";
        });
    </script>
</body>
</html>
</body>
</html>
