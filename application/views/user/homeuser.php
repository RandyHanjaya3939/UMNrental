<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>User Rental</title>

  <!-- Bootstrap core CSS -->
  <?php echo $css ?>

  <!-- Custom styles for this template -->
  <?php echo $homecss ?>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">UMNRental</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php if ($user) { ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/welcome/rent") ?>">Rent Now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/welcome/cart") ?>">Cart</a>
          </li>
          <li class="nav-item" style=>
            <a class="nav-link" href="<?= base_url("index.php/welcome/order") ?>">Orderan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/aboutus/user") ?>">About</a>
          </li>

        </ul>
      <?php } else if ($admin) { ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/aboutus") ?>">About</a>
          </li>

        </ul>
      <?php } ?>
    </div>
    <ul class="navbar-nav px-3">
      <div class="topbar-divider d-none d-sm-block"></div>
      <?php if ($user) { ?>
        <li class="nav-item dropdown no-arrow text-nowrap">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama']; ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('index.php/welcome/profile') ?>">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      <?php } else if ($admin) { ?>
        <li class="nav-item dropdown no-arrow text-nowrap">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $admin['nama']; ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= base_url('index.php/admin') ?>">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Admin's Room
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      <?php } ?>
    </ul>

  </nav>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="row m-0">
        <div class="col pr-0">
          <a class="btn btn-primary float-right" href="<?= base_url("index.php/welcome/rent") ?>">Rent a console now!</a>
        </div>
    </div>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">PlayStation® 5</h1>
      <p class="lead font-weight-normal">Lightning-fast loading with an ultra-high-speed SSD.</br>3D Audio with haptic feeback for deeper immersion.</br>All-new incredible PlayStation® games.</p>
      <button class="btn btn-outline-secondary">Coming Soon</button>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Xbox Series X</h2>
        <p class="lead">True 4K Gaming.</p>
      </div>
      <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto" src="<?= base_url('assets/barang/XBox_Series_X.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">PlayStation® 4</h2>
        <p class="lead">Incredible games & non-stop entertainment.</p>
      </div>
      <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto" src="<?= base_url('assets/barang/PlayStation®_4.png') ?>" alt="PlayStation 4" srcset="">
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">PlayStation® 3</h2>
        <p class="lead">Incredible games & non-stop entertainment.</p>
      </div>
      <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto" src="<?= base_url('assets/barang/PlayStation®_3.png') ?>" alt="PlayStation3" srcset="">
      </div>
    </div>
    <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Xbox Series S</h2>
        <p class="lead">Next-gen perfomance, tiny package.</p>
      </div>
      <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto" src="<?= base_url('assets/barang/XBox_Series_S.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
    </div>
  </div>

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <img class="img-fluid" src="<?= base_url('assets/pendukung/logo.jpg') ?>">
        <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li>Cool stuff</li>
          <li>Fast Response</li>
          <li>Shopping Cart</li>
          <li>Easy to Use</li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Company</h5>
        <ul class="list-unstyled text-small">
          <li>Universitas Multimedia Nusantara</li>
          <li>Serpong, Tangerang</li>
          <li>Indonesia</li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Team</h5>
        <ul class="list-unstyled text-small">
          <li>Juan</li>
          <li>Randy Hanjaya</li>
          <li>Richard Alvin.P</li>
          <li>Sion Theodorus.S.D </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <?php if ($user) { ?>
          <h5>About Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?= base_url('index.php/aboutus/user') ?>">About</a></li>
          </ul>
        <?php } else if ($admin) { ?>
          <h5>About Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?= base_url('index.php/aboutus') ?>">About</a></li>
          </ul>
        <?php } ?>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('index.php/login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php echo $js ?>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>
</body>

</html>