<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="logo_bandung.png">
    <title>Pesan Bandung Lautan Api</title>
  </head>
  <style>
    .fontsize-1{
        font-size: 50px;
        font-weight: bold;
    }
  </style>
  <body>
    <!-- nav -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><img src="logo_bandung.png" alt="/" width="50" ></svg>
        <span class="fs-4">Bandung Lautan Api</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="http://localhost:8080/PAS%202023-2024/halaman01.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="http://localhost:8080/PAS%202023-2024/halaman02.php" class="nav-link">Pengertian</a></li>
        <li class="nav-item"><a href="http://localhost:8080/PAS%202023-2024/halaman03.php" class="nav-link">Tokoh</a></li>
        <li class="nav-item"><a href="http://localhost:8080/PAS%202023-2024/halaman04.php" class="nav-link">Pesan</a></li>
      </ul>
    </header>
    
    <div class="container" align="center">
    <h1 class="fontsize-1">- Pesan -</h1>
    </div>
<div class="container">
<form method="POST" name="pesan">
    <div class="mb-3">
      <label for="ExampleInputnama" class="form-label">Nama Lengkap</label>
      <input type="text" name="nm" class="form-control" placeholder="Masukan Nama Lengkap">
    </div>

    <div class="mb-3">
      <label for="ExampleInputharga" class="form-label">Pesan</label>
      <input type="text" name="psn" class="form-control" placeholder="Masukan Pesan">
    </div>
  <button type="submit" class="btn btn-primary mb-2" name="submit">Kirim</button>
</form><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    if(isset($_POST['submit'])){
      $nm = $_POST['nm'];
      $psn = $_POST['psn'];

      echo "<div class ='container'>";
      echo "<h3>Pesan</h3>";

      echo "Nama Lengkap : $nm </br>";
      echo "Pesan : $psn </br>";
    }
    ?>
  </body>
</html>