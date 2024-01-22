<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LEAPJOKI</title>
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
            background: url(/assets/Picsart_23-11-22_15-39-39-030.jpg) center/cover no-repeat fixed;
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

        .carousel-inner {
            text-align: center;
        }

        .testimonial-image {
            max-height: 500px;
            max-width: 100%;
            display: block;
            margin: 0 auto;
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
            <a class="navbar-brand" href="#">LEAP<span style="color: #08f46c">JOKI</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testi">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#list">Pilihan Joki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar end -->

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-7 mx-auto my-5">
                <h1 class="display-3 fw-bold">Selamat Datang di Leap <span style="color: #08f46c">Joki</span>
                <h3 class="fw-bold mb-3">Mau naik rank tapi banyak urusan? <span style="color: #08f46c">LEAP JOKI SOLUSINYA!!!</span></h3>
            </div>
        </div>
    </section>
    <!-- Home Section end -->

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container col-md-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-12 col-lg-6">
                    <img src="/php_login/assets/EA FC Vini.jpg" class="d-block mx-lg-auto img-fluid img-thumbnail" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Tentang <span style="color: #08f46c">Kami</span></h1>
                    <p class="lead" style="font-size: 28px">Mengapa harus joki di <span style="color: #08f46c">Leap Joki?</span> Karena <span style="color: #08f46c">Leap Joki</span> mempersembahkan layanan joki Fifa Mobile yang cepat, murah, serta aman dan terpercaya! Tingkatkan permainan dan rank Anda dengan bantuan dari profesional kami.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Testi Section start -->
    <section class="testi" id="testi">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-center mb-4"><span style="color: #08f46c">Testi</span>moni</h1>
            <div id="testiCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="testimonial-image" src="/php_login/assets/T1.jpg" alt="Testimoni 1" />
                    </div>
                    <div class="carousel-item">
                        <img src="/php_login/assets/T2.jpg" class="testimonial-image" alt="Testimoni 2" />
                    </div>
                    <div class="carousel-item">
                        <img src="/php_login/assets/T3.jpg" class="testimonial-image" alt="Testimoni 3" />
                    </div>
                    <div class="carousel-item">
                        <img src="/php_login/assets/T4.jpg" class="testimonial-image" alt="Testimoni 4" />
                    </div>
                    <div class="carousel-item">
                        <img src="/php_login/assets/T5.jpg" class="testimonial-image" alt="Testimoni 5" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testiCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testiCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Testi Section end -->

    <!-- List Section -->
    <section class="list" id="list">
      <div class="container py-5">
        <h1 class="display-5 fw-bold text-center mb-4">
          Pilihan <span style="color: #08f46c">Joki</span>
        </h1>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="card" style="background-color: #282c30; color: #fff">
              <img src="/php_login/assets/Rank.jpg" class="card-img-top" alt="Joki 1" />
              <div class="card-body">
                <h5 class="card-title text-center" style="font-size: 28px">
                  <span style="color: #08f46c">Joki</span> Rank
                </h5>
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Legend 1 / Win <br />
                    Rp 10.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Legend 2 / Win <br />
                    Rp 7.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Legend 3 / Win <br />
                    Rp 5.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Kelas Dunia / Win <br />
                    Rp 3.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Pro / Win <br />
                    Rp 2.500
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="background-color: #282c30; color: #fff">
              <img src="/php_login/assets/UCL.jpg" class="card-img-top" alt="Joki 2" />
              <div class="card-body">
                <h5 class="card-title text-center" style="font-size: 28px">
                  <span style="color: #08f46c">Joki</span> UCL
                </h5>
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Legendary <br />
                    Rp 30.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    World Class <br />
                    Rp 28.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Professional <br />
                    Rp 26.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Semi-Pro <br />
                    Rp 24.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Amateur <br />
                    Rp 22.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Beginner <br />
                    Rp 20.000
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="background-color: #282c30; color: #fff">
              <img
                src="/php_login/assets/Live Event.jpg"
                class="card-img-top"
                alt="Joki 3" />
              <div class="card-body">
                <h5 class="card-title text-center" style="font-size: 28px">
                  <span style="color: #08f46c">Joki</span> Live Event
                </h5>
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Mode Challenge Biasa <br />
                    Rp 15.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    PVP Challenge <br />
                    Rp 15.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Daily LaLiga <br />
                    Rp 15.000
                  </li>
                  <li
                    class="list-group-item"
                    style="background-color: #282c30; color: #fff">
                    Misi Harian <br />
                    Rp 5.000
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- List Section end -->

    <!-- Order Section -->
    <section class="order" id="order">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-center mb-4"><span style="color: #08f46c">Order </span>Sekarang</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-center" style="background-color: #282c30; color: #fff">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 28px">Pilih Jasa Joki FIFA Mobile Kami</h5>
                            <p class="card-text">Tambahkan keahlian baru ke permainan FIFA Mobile Anda dengan bantuan profesional kami.</p>
                            <a href="order.php" class="btn btn-primary" style="background-color: #08f46c; outline: none">
                              Order Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Section end -->

    <!-- Footer Section start -->
    <div class="container text-center">
        <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 border-top">
            <p class="col4 mb-0">&copy; 2023 Dibuat oleh Leap.</p>
            <div class="col4 d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link px-2">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testi" class="nav-link px-2">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a href="#list" class="nav-link px-2">Pilihan Joki</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function redirectToLoginPage() {
            window.location.href = "login.html";
        }

        document
            .querySelector(".nav-link[href='#order']")
            .addEventListener("click", redirectToLoginPage);
    </script>
</body>
</html>
