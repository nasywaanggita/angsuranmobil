<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Angsuran Mobil</title>
      <link rel="icon" href="assets/images/logo.png" type="image">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif;">
    

<nav class="navbar navbar-expand-lg navbar-dark bg-success p-4 fixed-top">
  <div class="container">
      <a class="navbar-brand fw-bold" href="/">
          <img src="assets/images/logo.png" alt="Logo Bahagia" width="30" height="30" class="d-inline-block align-text-top">
         Alurex
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link text-white" href="/angsuran">Beranda</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="#tentang">Tentang Perusahaan</a></li>
              <li class="nav-item"><a class="nav-link text-white" href="#kontak">Kontak Perusahaan</a></li>
          </ul>
      </div>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/slider.jpg" class="d-block w-100" alt="Slider Image 1" style="object-fit: cover; height: 70vh;">
            <div class="carousel-caption d-block">
                <h1 class="fs-2 fs-md-1 fs-lg-1 fw-bold">Selamat Datang di Alurex</h1>
                <p class="fs-5 fs-md-4">Mobil masa depan dengan teknologi canggih dan ramah lingkungan.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/slider2.jpg" class="d-block w-100" alt="Slider Image 2" style="object-fit: cover; height: 70vh;">
            <div class="carousel-caption d-block">
                <h1 class="fs-2 fs-md-1 fs-lg-1 fw-bold">Performa Tanpa Kompromi</h1>
                <p class="fs-5 fs-md-4">Rasakan performa maksimal dan efisiensi terbaik dengan Alurex.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/slider3.jpg" class="d-block w-100" alt="Slider Image 3" style="object-fit: cover; height: 70vh;">
            <div class="carousel-caption d-block">
                <h1 class="fs-2 fs-md-1 fs-lg-1 fw-bold">Solusi Berkendara Masa Depan</h1>
                <p class="fs-5 fs-md-4">Menggabungkan teknologi otonom dan desain futuristik.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container my-5">
    <h3 class="text-center fw-bold">Kalkulator Kredit Mobil</h3>
    <form id="kalkulatorForm" action="" method="POST" class="p-4">
        <div class="mb-3">
            <label for="hargaMobil" class="form-label">Harga Mobil</label>
            <input type="number" name="harga_mobil" id="hargaMobil" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="dp" class="form-label">DP (%)</label>
            <input type="number" name="dp" id="dp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tenor" class="form-label">Tenor (Tahun)</label>
            <input type="number" name="tenor" id="tenor" class="form-control" required>
        </div>
        <div class="d-flex justify-content-end"> 
            <button type="button" id="hitungButton" class="btn btn-success px-5">Kirim</button>
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung'])) {
    $harga_mobil = $_POST['harga_mobil'];
    $dp_percent = $_POST['dp'];
    $tenor = $_POST['tenor'];

    $dp = ($dp_percent / 100) * $harga_mobil;
    $bunga = (20 / 100) * $harga_mobil;
    $sisa_pinjaman = $harga_mobil - $dp;
    $total_pinjaman = $sisa_pinjaman + $bunga;
    $angsuran_per_bulan = $total_pinjaman / ($tenor * 12);
?>

<div id="hasil" class="container my-4" style="display: none;">
    <h4>Hasil Perhitungan</h4>
    <ul class="list-group" id="hasilList">
    </ul>
</div>

<?php
}
?>


<section id="tentang" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Tentang Perusahaan</h2>
        <p class="text-center">Alurex adalah perusahaan otomotif terdepan yang berfokus pada inovasi kendaraan ramah lingkungan. Kami berkomitmen untuk memberikan kendaraan dengan teknologi canggih yang mendukung kelestarian lingkungan dan masa depan yang lebih bersih. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, nemo, explicabo reprehenderit laborum natus, itaque tempora delectus exercitationem ut accusantium qui? Corrupti odit nemo praesentium doloremque suscipit ab, amet illo.</p>
    </div>
</section>

<section id="kontak" class="bg-white py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Kontak Perusahaan</h2>
        <p class="text-center">Untuk informasi lebih lanjut, Anda dapat menghubungi kami di:</p>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <p>Alamat: Jalan Veteran, No 25, Kota Malang</p>
                <p>Email: Alurex@gmail.com</p>
                <p>Telepon: +6281234567890</p>
            </div>
        </div>
    </div>
</section>

<footer class="bg-success text-white pt-5 pb-5">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <h5 class="fw-bold">Alurex</h5>
              <p>Perusahaan kami berfokus pada menyediakan layanan terbaik di industri otomotif, dengan komitmen terhadap kualitas dan kepuasan pelanggan.</p>
          </div>
          <div class="col-md-6 d-flex align-items-start justify-content-md-end">
              <div>
                  <h6 class="fw-bold mb-2">Ikuti Kami</h6>
                  <a href="#" class="text-white me-3" style="text-decoration: none;">
                      <img src="assets/images/instagram.svg" alt="Instagram" width="24" height="24">
                  </a>
                  <a href="#" class="text-white me-3" style="text-decoration: none;">
                      <img src="assets/images/tiktok.svg" alt="TikTok" width="24" height="24">
                  </a>
                  <a href="#" class="text-white" style="text-decoration: none;">
                      <img src="assets/images/youtube.svg" alt="YouTube" width="24" height="24">
                  </a>
              </div>
          </div>
      </div>
      <hr class="my-3">
      <div class="row">
          <div class="col text-center">
              <p class="mb-0">© 2024 Alurex. All rights reserved.</p>
          </div>
      </div>
  </div>
</footer>

<script>

document.getElementById("hitungButton").addEventListener("click", function() {
        
        const hargaMobil = parseFloat(document.getElementById("hargaMobil").value);
        const dpPercent = parseFloat(document.getElementById("dp").value);
        const tenor = parseFloat(document.getElementById("tenor").value);

      
        const dp = (dpPercent / 100) * hargaMobil;
        const bunga = (20 / 100) * hargaMobil;
        const sisaPinjaman = hargaMobil - dp;
        const totalPinjaman = sisaPinjaman + bunga;
        const angsuranPerBulan = totalPinjaman / (tenor * 12);

        
        const hasilList = document.getElementById("hasilList");
        hasilList.innerHTML = `
            <li class="list-group-item">Harga Mobil: Rp. ${hargaMobil.toLocaleString('id-ID')}</li>
            <li class="list-group-item">DP: ${dpPercent}% (Rp. ${dp.toLocaleString('id-ID')})</li>
            <li class="list-group-item">Tenor: ${tenor} Tahun (${tenor * 12} Bulan)</li>
            <li class="list-group-item">Bunga: 20% (Rp. ${bunga.toLocaleString('id-ID')})</li>
            <li class="list-group-item">Jumlah Angsuran: Rp. ${angsuranPerBulan.toLocaleString('id-ID')} / Bulan</li>
        `;

       
        document.getElementById("hasil").style.display = "block";
    });


// nav scroll
    document.addEventListener("DOMContentLoaded", function () {
        const navbarHeight = document.querySelector('.navbar').offsetHeight;
        const sections = document.querySelectorAll("section[id]");

        const observerOptions = {
            root: null,
            rootMargin: `-${navbarHeight}px 0px 0px 0px`,
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute("id");
                const link = document.querySelector(`.navbar a[href="#${id}"]`);
                if (entry.isIntersecting) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        }, observerOptions);

        sections.forEach(section => observer.observe(section));
        document.querySelectorAll('.navbar a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetID = this.getAttribute('href');
                if (targetID.startsWith("#")) {
                    e.preventDefault();
                    const targetElement = document.querySelector(targetID);
                    window.scrollTo({
                        top: targetElement.offsetTop - navbarHeight,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
