<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="sejarah.jpg">
    <title>Log in</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #1b1b1c, #070239, #08042e); /* Gradien bergerak */
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite; /* Animasi gradien */
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    overflow: hidden;
    position: relative;
}

/* Animasi gradien latar belakang */
@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Animasi awan bergerak */
.cloud {
    position: absolute;
    width: 200px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    filter: blur(10px);
    animation: moveClouds 20s linear infinite;
}

.account p {
        font-size: 12px; /* Sesuaikan ukuran font */
        margin-left: 5%;
    }

.cloud:nth-child(odd) {
    animation-duration: 25s;
    animation-delay: -10s;
}

.cloud:nth-child(even) {
    width: 300px;
    height: 150px;
}

@keyframes moveClouds {
    from {
        left: -300px;
    }
    to {
        left: 100%;
    }
}

/* Animasi bintang berkelip */
@keyframes twinkle {
    0% { opacity: 0.5; }
    50% { opacity: 1; }
    100% { opacity: 0.5; }
}

.star {
    position: absolute;
    width: 2px;
    height: 2px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    animation: twinkle 2s infinite ease-in-out;
}

.star:nth-child(odd) {
    width: 3px;
    height: 3px;
}

.star-container {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

/* Dekorasi lingkaran animasi */
.circle {
    position: absolute;
    width: 50px;
    height: 50px;
    background: rgba(0, 102, 255, 0.4);
    border-radius: 50%;
    animation: moveCircles 8s infinite ease-in-out;
}

@keyframes moveCircles {
    0% {
        transform: scale(1) translateY(0);
    }
    50% {
        transform: scale(1.3) translateY(-100px);
    }
    100% {
        transform: scale(1) translateY(0);
    }
}

.circle:nth-child(even) {
    background: rgba(255, 255, 255, 0.5);
    width: 70px;
    height: 70px;
    animation-duration: 12s;
}

/* Form container */
.container {
    background: rgba(0, 0, 50, 0.85);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
    max-width: 400px;
    width: 100%;
    animation: fadeIn 1.5s ease-in-out;
    position: relative;
    z-index: 1;
}


@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-container h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.2rem;
    color: #fff;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: linear-gradient(135deg, #061c2f, #00aaff);
    -webkit-background-clip: text;
    color: transparent;
}

.input-group {
    margin-bottom: 20px;
}

.input-group input {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 30px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 1.1rem;
    outline: none;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.input-group input:focus {
    background-color: rgba(255, 255, 255, 0.4);
    box-shadow: 0 0 10px rgba(0, 170, 255, 0.6);
}

.btn {
    width: 100%;
    padding: 15px;
    background-color: #140b36;
    border: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: #00aaff;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 102, 255, 0.4);
}

.btn:active {
    transform: translateY(0);
}

/* Responsive untuk layar kecil */
@media (max-width: 768px) {
    .container {
        padding: 30px;
        max-width: 90%;
    }
}

    </style>
</head>
<body>
    <div class="back">
    <a href="{{ url('/') }}" class="btn btn-outline-custom position-absolute m-3" style="top: 0; left: 0; z-index: 1000; width: 100px; animation: fadeIn 1.5s ease-in-out; ">
       <i class="fas fa-home me-2"></i>Back
   </a>
   </div>

    <!-- Partikel bintang berkelip -->
    <div class="star-container">
        <div class="star" style="top: 10%; left: 20%;"></div>
        <div class="star" style="top: 30%; left: 50%;"></div>
        <div class="star" style="top: 60%; left: 80%;"></div>
        <div class="star" style="top: 80%; left: 40%;"></div>
    </div>

    <!-- Lingkaran animasi -->
    <div class="circle" style="top: 20%; left: 10%;"></div>
    <div class="circle" style="top: 50%; left: 70%;"></div>

    <!-- Awan bergerak -->
    <div class="cloud" style="top: 10%;"></div>
    <div class="cloud" style="top: 60%;"></div>

    <div class="container">
        <div class="form-container">
            <h1>Register</h1>
            <form action="/" method="post">
            <div class="input-group">
                    <input type="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" inputmode="numeric" pattern="[0-9]+" title="Password must contain only numbers" required>
                </div>
                <div class="account">
                <p>Have an account? <a href="/login" style="text-decoration: none;"><span>Go Here.</span></a></p>
            </div>
                <button type="submit" class="btn">Log in</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOoglGIVxRwKJ1n9ff2e5k4qEU5bz+dZW5ZM90DtMXe9U+YlbGrmqZXfLOZhdEjK" crossorigin="anonymous"></script>
</body>
</html>
