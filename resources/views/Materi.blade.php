<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Sejarah - Materi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/sejarah.jpg') }}">
<style>
    body {
    font-family: 'Poppins', sans-serif;
    background-color: #0f1b3f;
    color: #f4f4f9;
    margin: 0;
    padding: 0;
}
.navbar {
    background-color: #878dd5;
}
.navbar-brand {
    font-weight: bold;
    color: #fff;
}
.navbar-toggler {
    border: none;
}
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    border-radius: 15px;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    background-color: #f4f4f9;
}
.card-img-top {
    border-radius: 15px 15px 0 0;
    height: 200px;
    object-fit: cover;
}
.card-body {
    background-color: #fff;
    border-radius: 0 0 15px 15px;
    color: #333;
    padding: 1.5rem;
}
.card-title {
    font-weight: bold;
    color: #4e342e;
}
.card-text {
    color: #6d4c41;
}
.btn-custom {
    background-color: #162a53;
    color: #fff;
    border-radius: 20px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
}
.btn-custom:hover {
    background-color: #6f4e37;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}
.btn-outline-custom {
    background-color: #fff;
    border: 2px solid #162a53;
    color: #162a53;
    border-radius: 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
}
.btn-outline-custom:hover {
    background-color: #162a53;
    color: #fff;
}
.gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 1rem 0;
}
.gallery img {
    width: 100%;
    height: 120px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
}
.gallery img:hover {
    transform: scale(1.1);
}
.bg-gradient {
    background: linear-gradient(135deg, #6f4e37, #8b572a);
}
@keyframes zoomIn {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    50% {
        transform: scale(1.05);
        opacity: 0.7;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
.card-container {
    animation: zoomIn 1s ease-out forwards;
    opacity: 0;
}
.card:nth-child(1) {
    animation-delay: 0.3s;
}
.card:nth-child(2) {
    animation-delay: 0.6s;
}
.card:nth-child(3) {
    animation-delay: 0.9s;
}
.card:nth-child(4) {
    animation-delay: 1.2s;
}
.card:nth-child(5) {
    animation-delay: 1.5s;
}
.card:nth-child(n+6) {
    animation-delay: calc(0.3s * (n - 1));
}


</style>
</head>
<body>

    <nav class="bg-gradient shadow mb-5 py-3">
        <a href="{{ url('/') }}" class="navbar-brand">
            <i class="bi bi-arrow-left-square-fill"></i>
            Kembali
        </a>
        <div class="container">
            <a class="navbar-brand fw-bold">Materi Sejarah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

   
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          
            <div class="col">
                <div class="card shadow-sm border-light h-100 d-flex flex-column card-container">
                    <img src="{{ asset('img/voc.jpg') }}" class="card-img-top" alt="Materi VOC">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title">Materi VOC</h5>
                      <p class="card-text">Pelajari lebih lanjut tentang sejarah VOC dan pengaruhnya di Indonesia.</p>
                      <div class="gallery">
                          <img src="{{ asset('img/voc(1).jpg') }}" alt="Gambar 1 VOC">
                          <img src="{{ asset('img/voc(2).jpg') }}" alt="Gambar 2 VOC">
                          <img src="{{ asset('img/voc(3).jpg') }}" alt="Gambar 3 VOC">
                      </div>
                      <div class="btn-group mt-auto">
                          
                          <a href="https://www.gramedia.com/literasi/pengertian-voc/" class="btn btn-custom">
                              <i class="fas fa-book-open me-2"></i>Baca Selengkapnya
                          </a>
                         
                          <a href="https://www.youtube.com/watch?v=VIDEO_ID_VOC" target="_blank" class="btn btn-outline-custom">
                              <i class="fas fa-video me-2"></i>Tonton Video
                          </a>
                      </div>   
                  </div>
               </div>
            </div>
            
           
            <div class="col">
                <div class="card shadow-sm border-light h-100 d-flex flex-column card-container">
                    <img src="{{ asset('img/OIP(2).JPG') }}" class="card-img-top" alt="Pelayaran Bangsa Barat">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title">Pelayaran Bangsa Barat Ke Indonesia</h5>
                      <p class="card-text">Pelajari lebih lanjut tentang Pelayaran Bangsa Barat ke Indonesia.</p>
                      <div class="gallery">
                          <img src="{{ asset('img/pelayaran(1).jpg') }}" alt="Gambar 1 Pelayaran">
                          <img src="{{ asset('img/pelayaran(2).jpg') }}" alt="Gambar 2 Pelayaran">
                          <img src="{{ asset('img/pelayaran(3).jpg') }}" alt="Gambar 3 Pelayaran">
                      </div>
                      <div class="btn-group mt-auto">
                      
                          <a href="https://tirto.id/sejarah-kedatangan-bangsa-belanda-ke-indonesia-latar-belakang-gjtz" class="btn btn-custom">
                              <i class="fas fa-book-open me-2"></i>Baca Selengkapnya
                          </a>
                         
                          <a href="https://youtu.be/i-NnvRMTmR4?si=2pBWcIadLFXkY9Jo" target="_blank" class="btn btn-outline-custom">
                              <i class="fas fa-video me-2"></i>Tonton Video
                          </a>
                      </div>   
                  </div>
               </div>
            </div>

           
            <div class="col">
               <div class="card shadow-sm border-light h-100 d-flex flex-column card-container">
                   <img src="{{ asset('img/OIP (3).jpg') }}" class="card-img-top" alt="Kolonialisme dan Perlawanan">
                   <div class="card-body d-flex flex-column">
                       <h5 class="card-title">Kolonialisme & Perlawanan Indonesia</h5>
                       <p class="card-text">Kenali perjuangan bangsa Indonesia melawan kolonialisme.</p>
                       <div class="gallery">
                           <img src="{{ asset('img/kolonialisme(1).jpg') }}" alt="Gambar 1 Kolonialisme">
                           <img src="{{ asset('img/klonialisme(2).jpg') }}" alt="Gambar 2 Kolonialisme">
                           <img src="{{ asset('img/kolonialisme(3).jpg') }}" alt="Gambar 3 Kolonialisme">
                       </div>
                       <div class="btn-group mt-auto">
                          
                           <a href="https://www.kherysuryawan.id/2023/09/rangkuman-sejarah-kelas-11-bab-1.html" class="btn btn-custom">
                               <i class="fas fa-book-open me-2"></i>Baca Selengkapnya
                           </a>
                          
                           <a href="https://youtu.be/zwzigVfABpk?si=h2KB0ML3YjYg-6yg" target="_blank" class="btn btn-outline-custom">
                               <i class="fas fa-video me-2"></i>Tonton Video
                           </a>
                       </div>   
                   </div>
               </div>
            </div>
        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-9NDhHH5qZ8OSg85j5RThmAN1Q/1qX8zEZj2JWmYZo5D4v9h7SgV6pWOlczp2L7L9" crossorigin="anonymous"></script>
</body>
</html>
