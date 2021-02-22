<?php
  include "../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>BPBJ Prov. Gorontalo - Pegawai</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="../assets/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="../assets/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="../assets/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="../assets/manifest.json">
<link rel="mask-icon" href="../assets/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="../assets/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/pricing.css" rel="stylesheet">
  </head>
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">BPBJ Provinsi Gorontalo</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="<?php echo $url ?>" style="text-decoration: none;">Beranda</a>
    <a class="p-2 text-dark link-active" href="<?php echo $url."/pegawai" ?>" style="text-decoration: none;">Pegawai</a>
    <a class="p-2 text-dark" href="<?php echo $url."/kontak" ?>" style="text-decoration: none;">Kontak</a>
  </nav>
</header>

<main class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PEGAWAI</h1>
    <p class="lead">Data ASN dan PTT Biro Pengadaan Barang Jasa Setda Provinsi Gorontalo</p>
  </div>

  <div class="card shadow">
    <div class="card-header ">
      <div class="nav nav-tabs card-header-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-asn-tab" data-bs-toggle="tab" data-bs-target="#nav-asn" type="button" role="tab" aria-controls="nav-asn" aria-selected="true">ASN</button>
        <button class="nav-link" id="nav-ptt-tab" data-bs-toggle="tab" data-bs-target="#nav-ptt" type="button" role="tab" aria-controls="nav-ptt" aria-selected="false">PTT</button>
      </div>
    </div>
    <div class="card-body">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-asn" role="tabpanel" aria-labelledby="nav-asn-tab"><?php include "asn.php" ?></div>
        <div class="tab-pane fade" id="nav-ptt" role="tabpanel" aria-labelledby="nav-ptt-tab"><?php include "ptt.php" ?></div>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-6 col-md d-flex">
        <img class="align-self-center" src="../assets/logo-provinsi.png" alt="Provinsi Gorontalo" width="12%">
        <small class="ml-2 d-block align-self-center text-muted">&copy; <a href="<?php echo $url ?>">BPBJ Prov. Gorontalo</a></small>
      </div>
      <div class="col-6 col-md d-flex justify-content-end">
        <img class="align-self-center" src="../assets/procurement5.png" alt="Art Of Procurement" width="50%">
      </div>
    </div>
  </footer>
</main>

    <!-- BOOTSTRAP -->
    <!-- Online -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Offline -->
    <!-- <script src="../assets/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
  </body>
</html>
