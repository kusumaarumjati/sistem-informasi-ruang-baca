<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
<link href={!! asset('asset/css/bootstrap.min.css') !!} rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href={!! asset('asset/css/bootstrap-grid.css') !!} rel='stylesheet' type='text/css' />
<link href={!! asset('asset/css/bootstrap-grid.min.css') !!} rel='stylesheet' type='text/css' />
<link href={!! asset('asset/css/bootstrap-reboot.css') !!} rel='stylesheet' type='text/css' />
<link href={!! asset('asset/css/bootstrap-reboot.min.css') !!} rel='stylesheet' type='text/css' />

<!--     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
    <!-- Custom styles for this template -->
    <link href={!! asset('asset/css/navbar-top-fixed.css') !!} rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Ruang Baca</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/blog">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/anggota">Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/petugas">Petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/buku">Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rak">Rak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/peminjaman">Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pengembalian">Pengembalian</a>
      </li>
    </ul>
<!--     <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<main role="main" class="container">
  <div class="container">
  @yield('konten')
<!--   <div class="jumbotron">
    
  </div> -->
</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
