

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Digital History Catalog</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/sejarah.jpg') }}">

    <style>
       
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #02042b, #030027); 
    color: #fff;
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    position: relative;
    
}

nav {
    margin: 20px;
}

.back-button {
    text-decoration: none;
    font-size: 18px;
    color: #f1eeee;
    display: flex;
    align-items: center;
}

.back-button i {
    margin-right: 8px;
    font-size: 24px;
}

.back-button:hover {
    color: #d2a64d;
}


header {
    background-color: rgba(2, 2, 36, 0.9);
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 10;
}

header h1 {
    font-size: 2.5rem;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    background: linear-gradient(to right, #3f4169, #122260);
    -webkit-background-clip: text;
    color: transparent;
    animation: fadeInDown 2s ease-in-out; 
}

main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 20px;
    position: relative;
    z-index: 1;
}

.about-section {
    background-color: rgba(0, 0, 50, 0.8);
    padding: 40px;
    border-radius: 20px;
    max-width: 900px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    position: relative;
    z-index: 2;
    animation: fadeIn 3s ease-in-out; 
}

.about-section h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
    background: linear-gradient(45deg, #ffffff, #130d6d);
    -webkit-background-clip: text;
    color: transparent;
    animation: textGlow 2s ease-in-out infinite; 
}

.about-section p {
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.about-section h3 {
    font-size: 1.6rem;
    margin-bottom: 15px;
}

.about-section ul {
    list-style-type: disc; 
    padding-left: 20px;
}

.about-section ul li {
    font-size: 1.2rem;
    margin-bottom: 10px;
    position: relative;
    padding-left: 20px;
    animation: slideInLeft 2s ease-in-out; 
}

.options {
    margin-bottom: 10px;
}

.options label {
    display: block;
    margin-bottom: 8px;
}

.submit-button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #0056b3;
}

.feedback {
    font-size: 1em;
    font-weight: bold;
    margin-top: 10px;
}

.background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('public/img/bg.jpg') ;
    background-size: cover;
    z-index: -1;
}

.cloud, .cloud2 {
    position: absolute;
    background: url('path-to-cloud-image.png') no-repeat;
    background-size: cover;
    width: 100px;
    height: 60px;
    animation: float 10s linear infinite;
}

.cloud {
    top: 10%;
    left: 10%;
}

.cloud2 {
    top: 20%;
    right: 10%;
    width: 150px;
    height: 90px;
    animation-duration: 12s;
}

.star, .star2 {
    position: absolute;
    background: url('path-to-star-image.png') no-repeat;
    background-size: cover;
    width: 30px;
    height: 30px;
    animation: twinkle 2s infinite alternate;
}

.star {
    top: 15%;
    left: 25%;
}

.star2 {
    top: 30%;
    right: 20%;
    width: 40px;
    height: 40px;
}

.moon {
    position: absolute;
    background: url('path-to-moon-image.png') no-repeat;
    background-size: cover;
    width: 100px;
    height: 100px;
    top: 5%;
    right: 5%;
    animation: rotate 20s linear infinite;
}

@keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

@keyframes twinkle {
    0% { opacity: 0.8; }
    100% { opacity: 1; }
}

@keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


footer {
    background-color: #002244;
    text-align: center;
    padding: 15px 0;
    color: #ffffff;
    font-size: 0.9rem;
    position: relative;
    z-index: 10;
}


.cloud, .star, .moon {
    position: absolute;
    z-index: 0;
}

.cloud {
    background: rgba(255, 255, 255, 0.1);
    width: 200px;
    height: 100px;
    border-radius: 100px;
    filter: blur(10px);
    animation: moveCloud 30s linear infinite; 
}

.star {
    background: rgba(255, 255, 255, 0.6);
    width: 4px;
    height: 4px;
    border-radius: 50%;
    animation: twinkle 3s infinite ease-in-out;
}

.moon {
    background: radial-gradient(circle at 50% 50%, #f5f5dc, #ffcc00);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(255, 255, 200, 0.5);
    animation: pulse 6s infinite alternate; 
}


.cloud:nth-child(1) { top: 10%; left: 10%; }
.cloud:nth-child(2) { top: 30%; left: 50%; }
.cloud:nth-child(3) { top: 60%; left: 20%; }

.star:nth-child(4) { top: 15%; left: 70%; }
.star:nth-child(5) { top: 25%; left: 85%; }
.star:nth-child(6) { top: 35%; left: 60%; }
.star:nth-child(7) { top: 45%; left: 20%; }
.star:nth-child(8) { top: 55%; left: 75%; }

.moon {
    top: 5%;
    right: 10%;
}


@keyframes moveCloud {
    0% { transform: translateX(0); }
    100% { transform: translateX(300px); }
}


@keyframes twinkle {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 1; }
}


@keyframes pulse {
    from { transform: scale(1); opacity: 1; }
    to { transform: scale(1.1); opacity: 0.9; }
}

@keyframes textGlow {
    0%, 100% { text-shadow: 0 0 5px #6561ae, 0 0 10px #454195; }
    50% { text-shadow: 0 0 10px #c7cadc, 0 0 20px #e3e5f6; }
}


@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}


@keyframes fadeInDown {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
}


@keyframes slideInLeft {
    0% { opacity: 0; transform: translateX(-100px); }
    100% { opacity: 1; transform: translateX(0); }
}


@media (max-width: 768px) {
    .about-section {
        padding: 20px;
        max-width: 90%;
    }

    header h1 {
        font-size: 2rem;
    }
}

    </style>
</head>
<body>
    
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="moon"></div>

  
    <nav>
        <a href="{{ url('/') }}" class="back-button">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
    </nav>

    <header>
        <h1>Katalog Digital Sejarah</h1>
    </header>
    <main>
        <section class="about-section">
            <h2>Welcome to Our Digital History Catalog</h2>
            <p>Katalog digital sejarah adalah platform berbasis digital web yang dirancang untuk memudahkan guru untuk menyampaikan materi, dan memberikan penilaian kepada muridnya secara mudah. Katalog ini berfungsi sebagai arsip virtual yang memungkinkan pengguna mengakses berbagai materi sejarah, mulai dari dokumen, gambar, video, hingga artefak digital lainnya, secara cepat dan mudah. Dengan menggunakan teknologi modern, katalog ini bertujuan untuk menjaga dan memperluas akses ke sumber-sumber sejarah, memudahkan pembelajaran, penelitian, serta pelestarian warisan budaya.</p>
            
            <h3>Tujuan Katalog Digital Sejarah:</h3>
            <ul>
                <li>untuk memudahkan guru memberikan materi.</li>
                <li>untuk memudahkan guru memberikan penilaian.</li>
                <li>dll.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Digital History Catalog. All rights reserved.</p>
    </footer>

    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-ZOoglGIVxRwKJ1n9ff2e5k4qEU5bz+dZW5ZM90DtMXe9U+YlbGrmqZXfLOZhdEjK" crossorigin="anonymous"></script>
</body>
</html>
