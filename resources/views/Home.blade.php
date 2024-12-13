<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Sejarah - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/sejarah.jpg') }}">

  <style>
    body {
    background-image: url('{{ asset("img/bg.jpg") }}');
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.navbar {
    padding: 15px;
}
.navbar-nav .nav-item .nav-link h4 {
    color: #f8f9fa;
    transition: color 0.3s ease;
}
.navbar-nav .nav-item .nav-link:hover h4 {
    color: #ffc107;
}
h1, h4 {
    color: #f8f9fa;
}
.button .btn {
    transition: background-color 0.3s ease, color 0.3s ease;
}
.button .btn:hover {
    background-color: #ffc107;
    color: #fff;
}
.container h1 {
    font-size: 3rem;
    font-weight: bold;
}
.container h4 {
    font-size: 1.5rem;
    margin-top: 10px;
}
.container {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    max-width: 800px;
}
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Katalog Digital Sejarah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('materi') }}">
              <h4>Materi</h4>
            </a>
          </li>
          <u class="nav-item mx-2">
            <label class="nav-link">|</label>
          </u>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('about') }}">
              <h4>About</h4>
            </a>
          </li>
          <u class="nav-item mx-2">
            <label class="nav-link">|</label>
          </u>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('assesment') }}">
              <h4>Assessment</h4>
            </a>
          </li>
        </ul>
      </div>
      <a class="button" href="{{ url('login') }}">
        <button type="button" class="btn btn-outline-dark bg-light">Login</button>
      </a>
    </div>
  </nav>

 
  <div class="container mt-5 text-center text-light">
    <h1>Selamat Datang di Katalog Sejarah</h1>
    <h4>Katalog ini berisi informasi mengenai sejarah yang disusun untuk memperkaya wawasan Anda.</h4>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
