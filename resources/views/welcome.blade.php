<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di Mulya Tour</title>

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/adminlte@3.1.0/dist/css/adminlte.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Source Sans Pro', sans-serif;
    }

    .landing-page {
      background-color: #00b894;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }

    .landing-page .content-wrapper {
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      color: #fff;
    }

    .landing-page h1 {
      font-size: 48px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .landing-page p {
      font-size: 24px;
      margin-bottom: 40px;
    }

    .landing-page .login-button {
      background-color: #fff;
      color: #00b894;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .landing-page .login-button:hover {
      background-color: #eee;
    }

    .landing-page .globe-image {
      float: right;
      max-width: 700px;
      margin-top: 20px;
    }

    .landing-page .footer {
      margin-top: 40px;
      padding: 500px;
      text-align: center;
      color: #fff;
      font-size: 16px;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <!-- <a href="#" class="navbar-brand">
          <span class="brand-text font-weight-light">
            <i class="fas fa-globe"></i> Our Website
          </span>
        </a> -->

        <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->

        <!-- <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link login-link">Login</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper landing-page">
      <div class="container">
        <div class="content-wrapper">
          <h1>Selamat Datang di Mulya Tour</h1>
          <p>Mulya Tour merupkan tempat untuk reservasi wisata,penginapan,mencari berita mengenai wisata, kategori wisata yang cocok dengan anda</p>
          <a href="{{ route('login') }}" class="login-button">Masuk</a>
        </div>
        <!-- <img src="/resources/views/images/globe.png" alt="Globe" class="globe-image"> -->
      </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer
    <footer class="main-footer landing-page-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            &copy; {{ date('Y') }} Our Website. All rights reserved.
          </div>
        </div>
      </div>
    </footer> -->
    <!-- /.footer -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/adminlte@3.1.0/dist/js/adminlte.min.js"></script>
</body>

</html>
